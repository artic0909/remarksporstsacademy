<?php

namespace App\Http\Controllers;

use App\Models\AdminAboutClubEthicsModel;
use App\Models\AdminAboutFounderModel;
use App\Models\AdminAboutMissionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Import the Storage facade
use App\Models\AdminAboutModel;
use App\Models\AdminAboutPlayerEthicsModel;
use App\Models\AdminAboutVisionModel;
use App\Models\AdminHowWeAreModel;

class AdminAboutController extends Controller
{
    // ==================================================all banners start=========================================
    public function all_banners_get()
    {
        $aboutDatas = AdminAboutModel::orderBy('created_at', 'desc')->get();
        $aboutWhoDatas = AdminHowWeAreModel::orderBy('created_at', 'desc')->get();
        $aboutMissionDatas = AdminAboutMissionModel::orderBy('created_at', 'desc')->get();
        $aboutVisionDatas = AdminAboutVisionModel::orderBy('created_at', 'desc')->get();
        $aboutClubEthicsDatas = AdminAboutClubEthicsModel::orderBy('created_at', 'desc')->get();
        $aboutPlayerEthicsDatas = AdminAboutPlayerEthicsModel::orderBy('created_at', 'desc')->get();
        $aboutFounderDatas = AdminAboutFounderModel::orderBy('created_at', 'desc')->get();

        return view('admin.admin_aboutPage', compact('aboutDatas', 'aboutWhoDatas', 'aboutMissionDatas', 'aboutVisionDatas', 'aboutClubEthicsDatas', 'aboutPlayerEthicsDatas', 'aboutFounderDatas'));
    }

    public function all_banners_add(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'all_banner_image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        // Handle image uploads
        $filePaths = [
            'all_banner_image' => null,
        ];

        foreach ($filePaths as $key => &$value) {
            if ($request->hasFile($key)) {
                $file = $request->file($key);
                $fileName = time() . '_' . $file->getClientOriginalName();
                $value = $file->storeAs('allbanner', $fileName, 'public');
            }
        }

        // Create a new banner record
        AdminAboutModel::create([
            'all_banner_image' => $filePaths['all_banner_image'],
        ]);

        return back()->with('success', 'Banner added successfully!');
    }


    public function all_banners_update(Request $request, $id)
    {
        // Validate the request data
        $validated = $request->validate([
            'all_banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        // Find the banner
        $banner = AdminAboutModel::find($id);

        if ($banner) {
            // Handle image uploads
            $filePaths = [
                'all_banner_image' => $banner->all_banner_image,
            ];

            foreach ($filePaths as $key => &$value) {
                if ($request->hasFile($key)) {
                    // Delete the old image
                    if ($value && file_exists(public_path('storage/' . $value))) {
                        unlink(public_path('storage/' . $value));
                    }

                    // Store the new image
                    $file = $request->file($key);
                    $fileName = time() . '_' . $file->getClientOriginalName();
                    $value = $file->storeAs('banners', $fileName, 'public');
                }
            }

            // Update the banner record
            $banner->update([
                'all_banner_image' => $filePaths['all_banner_image'],
            ]);

            return back()->with('success', 'Banner updated successfully!');
        } else {
            return back()->with('error', 'Banner not found.');
        }
    }


    public function all_banners_delete($id)
    {
        $banner = AdminAboutModel::findOrFail($id);

        // Delete associated images from storage if necessary
        if ($banner->all_banner_image) {
            Storage::disk('public')->delete($banner->all_banner_image);
        }

        // Delete the banner record from the database
        $banner->delete();

        return redirect()->back()->with('success', 'Banner deleted successfully!');
    }
    // ==================================================all banners end=========================================














    // ==================================================all who Data start=========================================

    public function all_who_add(Request $request)
    {

        $validated = $request->validate([
            'who_image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'who_title' => 'string',
            'who_desc' => 'string',
            'who_date' => 'date',
            'who_time' => 'date_format:H:i',
        ]);

        // Handle the image upload
        if ($request->hasFile('who_image')) {
            $file = $request->file('who_image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/who', $fileName, 'public');
        }

        // Create a new sports information record
        AdminHowWeAreModel::create([
            'who_image' => $filePath ?? null,
            'who_title' => $request->input('who_title'),
            'who_desc' => $request->input('who_desc'),
            'who_date' => $request->input('who_date'),
            'who_time' => $request->input('who_time'),
        ]);

        return back()->with('success', 'Sports information added successfully!');
    }








    public function all_who_update(Request $request, $id)
    {
        $validated = $request->validate([
            'who_image' => 'mimes:jpeg,png,jpg,gif,webp|max:2048',
            'who_title' => 'string',
            'who_desc' => 'string|max:7800',
            'who_date' => 'date',
            'who_time' => 'date_format:H:i',
        ]);

        $whoInfo = AdminHowWeAreModel::find($id);

        if ($whoInfo) {
            if ($request->hasFile('who_image')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $whoInfo->who_image))) {
                    unlink(public_path('storage/' . $whoInfo->who_image));
                }

                // Store the new image
                $file = $request->file('who_image');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/who', $fileName, 'public');
                $whoInfo->who_image = $filePath;
            }

            $whoInfo->who_title = $request->input('who_title');
            $whoInfo->who_desc = $request->input('who_desc');
            $whoInfo->who_date = $request->input('who_date');
            $whoInfo->who_time = $request->input('who_time');
            $whoInfo->save();

            return back()->with('success', 'who information updated successfully!');
        } else {
            return back()->with('error', 'who information not found.');
        }
    }








    public function all_who_delete($id)
    {
        $whoInfo = AdminHowWeAreModel::find($id);

        if ($whoInfo) {
            // Delete the image file
            if (file_exists(public_path('storage/' . $whoInfo->who_image))) {
                unlink(public_path('storage/' . $whoInfo->who_image));
            }

            // Delete the record
            $whoInfo->delete();

            return back()->with('success', 'who information deleted successfully!');
        } else {
            return back()->with('error', 'who information not found.');
        }
    }
    // ==================================================all who Data end=========================================














    // ==================================================all mission Data start=========================================

    public function all_mission_add(Request $request)
    {

        $validated = $request->validate([
            'mission' => 'string',
        ]);
        AdminAboutMissionModel::create([
            'mission' => $request->input('mission'),
        ]);

        return back()->with('success', 'Mission added successfully!');
    }








    public function all_mission_update(Request $request, $id)
    {
        $validated = $request->validate([
            'mission' => 'string',
        ]);

        $missInfo = AdminAboutMissionModel::find($id);

        if ($missInfo) {
            $missInfo->mission = $request->input('mission');
            $missInfo->save();

            return back()->with('success', 'who information updated successfully!');
        } else {
            return back()->with('error', 'who information not found.');
        }
    }








    public function all_mission_delete($id)
    {
        $missInfo = AdminAboutMissionModel::find($id);

        if ($missInfo) {

            $missInfo->delete();

            return back()->with('success', 'who information deleted successfully!');
        } else {
            return back()->with('error', 'who information not found.');
        }
    }
    // ==================================================all mission Data end=========================================













    // ==================================================all vision Data start=========================================

    public function all_vision_add(Request $request)
    {

        $validated = $request->validate([
            'vision' => 'string',
        ]);
        AdminAboutVisionModel::create([
            'vision' => $request->input('vision'),
        ]);

        return back()->with('success', 'Vision added successfully!');
    }








    public function all_vision_update(Request $request, $id)
    {
        $validated = $request->validate([
            'vision' => 'string',
        ]);

        $vissInfo = AdminAboutVisionModel::find($id);

        if ($vissInfo) {
            $vissInfo->vision = $request->input('vision');
            $vissInfo->save();

            return back()->with('success', 'who information updated successfully!');
        } else {
            return back()->with('error', 'who information not found.');
        }
    }








    public function all_vision_delete($id)
    {
        $vissInfo = AdminAboutVisionModel::find($id);

        if ($vissInfo) {

            $vissInfo->delete();

            return back()->with('success', 'who information deleted successfully!');
        } else {
            return back()->with('error', 'who information not found.');
        }
    }
    // ==================================================all vision Data end=========================================















    // ==================================================all club_ethics Data start=========================================

    public function all_clubEthics_add(Request $request)
    {

        $validated = $request->validate([
            'club_ethics' => 'string',
        ]);
        AdminAboutClubEthicsModel::create([
            'club_ethics' => $request->input('club_ethics'),
        ]);

        return back()->with('success', 'Club Ethics added successfully!');
    }








    public function all_clubEthics_update(Request $request, $id)
    {
        $validated = $request->validate([
            'club_ethics' => 'string',
        ]);

        $clubEthicsInfo = AdminAboutClubEthicsModel::find($id);

        if ($clubEthicsInfo) {
            $clubEthicsInfo->club_ethics = $request->input('club_ethics');
            $clubEthicsInfo->save();

            return back()->with('success', 'who information updated successfully!');
        } else {
            return back()->with('error', 'who information not found.');
        }
    }








    public function all_clubEthics_delete($id)
    {
        $clubEthicsInfo = AdminAboutClubEthicsModel::find($id);

        if ($clubEthicsInfo) {

            $clubEthicsInfo->delete();

            return back()->with('success', 'who information deleted successfully!');
        } else {
            return back()->with('error', 'who information not found.');
        }
    }
    // ==================================================all vision Data end=========================================


















    // ==================================================all player_ethics Data start=========================================

    public function all_playerEthics_add(Request $request)
    {

        $validated = $request->validate([
            'player_ethics' => 'string',
        ]);
        AdminAboutPlayerEthicsModel::create([
            'player_ethics' => $request->input('player_ethics'),
        ]);

        return back()->with('success', 'Club Ethics added successfully!');
    }








    public function all_playerEthics_update(Request $request, $id)
    {
        $validated = $request->validate([
            'player_ethics' => 'string',
        ]);

        $playerEthicsInfo = AdminAboutPlayerEthicsModel::find($id);

        if ($playerEthicsInfo) {
            $playerEthicsInfo->player_ethics = $request->input('player_ethics');
            $playerEthicsInfo->save();

            return back()->with('success', 'who information updated successfully!');
        } else {
            return back()->with('error', 'who information not found.');
        }
    }








    public function all_playerEthics_delete($id)
    {
        $playerEthicsInfo = AdminAboutPlayerEthicsModel::find($id);

        if ($playerEthicsInfo) {

            $playerEthicsInfo->delete();

            return back()->with('success', 'who information deleted successfully!');
        } else {
            return back()->with('error', 'who information not found.');
        }
    }
    // ==================================================all vision Data end=========================================
















    // ==================================================all who Data start=========================================

    public function all_founder_add(Request $request)
    {

        $validated = $request->validate([
            'founder_img' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'founder_desc' => 'string',
        ]);


        if ($request->hasFile('founder_img')) {
            $file = $request->file('founder_img');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/founder', $fileName, 'public');
        }


        AdminAboutFounderModel::create([
            'founder_img' => $filePath ?? null,
            'founder_desc' => $request->input('founder_desc'),
        ]);

        return back()->with('success', 'Founder information added successfully!');
    }








    public function all_founder_update(Request $request, $id)
    {
        $validated = $request->validate([
            'founder_img' => 'mimes:jpeg,png,jpg,gif,webp|max:2048',
            'founder_desc' => 'string',
        ]);

        $founderInfo = AdminAboutFounderModel::find($id);

        if ($founderInfo) {
            if ($request->hasFile('founder_img')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $founderInfo->founder_img)) && is_file(public_path('storage/' . $founderInfo->founder_img))) {
                    unlink(public_path('storage/' . $founderInfo->founder_img));
                }

                // Store the new image
                $file = $request->file('founder_img');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/founder', $fileName, 'public');
                $founderInfo->founder_img = $filePath;
            }

            $founderInfo->founder_desc = $request->input('founder_desc');
            $founderInfo->save();

            return back()->with('success', 'Founder information updated successfully!');
        } else {
            return back()->with('error', 'Founder information not found.');
        }
    }








    public function all_founder_delete($id)
    {
        $founderInfo = AdminAboutFounderModel::find($id);

        if ($founderInfo) {
            // Delete the image file
            if (file_exists(public_path('storage/' . $founderInfo->founder_img))) {
                unlink(public_path('storage/' . $founderInfo->founder_img));
            }

            // Delete the record
            $founderInfo->delete();

            return back()->with('success', 'Founder information deleted successfully!');
        } else {
            return back()->with('error', 'Founder information not found.');
        }
    }
    // ==================================================all who Data end=========================================
}
