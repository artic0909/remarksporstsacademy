<?php

namespace App\Http\Controllers;

use App\Models\AdminHomeBannerModel;
use App\Models\AdminHomeFutureFocusModel;
use App\Models\AdminHomecollaborationModel;
use App\Models\AdminHomeCompanyEmailPhoneModel;
use App\Models\AdminHomeSportsCategoryModel;
use App\Models\AdminHomeSportsInformationModel;
use App\Models\MetaTag;
use Illuminate\Http\Request;

class AdminHomeController extends Controller
{




    // =====================================================================================================================================================
    // =========================>>>>>>>>>>>>>>>>>>>>>>>> BANNER DATA START <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<==============================================
    // =====================================================================================================================================================


    // =========================================data get============================================================
    public function home_banner_data_get()
    {
        $homeBannersDatas = AdminHomeBannerModel::orderBy('created_at', 'desc')->get();
        $homeFutureDatas = AdminHomeFutureFocusModel::orderBy('created_at', 'desc')->get();
        $homeCollabDatas = AdminHomecollaborationModel::orderBy('created_at', 'desc')->get();
        $homeComapanyDatas = AdminHomeCompanyEmailPhoneModel::orderBy('created_at', 'desc')->get();
        $homeSportsCategoryDatas = AdminHomeSportsCategoryModel::orderBy('created_at', 'desc')->get();
        $homeSportsInformationDatas = AdminHomeSportsInformationModel::orderBy('created_at', 'desc')->get();


        return view('admin.admin_homePage', compact('homeBannersDatas', 'homeFutureDatas', 'homeCollabDatas', 'homeComapanyDatas', 'homeSportsCategoryDatas', 'homeSportsInformationDatas'));
    }






    // =========================================data add============================================================
    public function home_banner_data_add(Request $request)
    {

        $validated = $request->validate([
            'title' => 'string',
            'description' => 'string',
            'banner_image' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);


        if ($request->hasFile('banner_image')) {
            $file = $request->file('banner_image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/banners', $fileName, 'public');


            AdminHomeBannerModel::create([
                'title' => $request->input('title'),
                'description' => $request->input('description'),
                'banner_image' => $filePath,
            ]);

            return back()->with('success', 'Banner added successfully!');
        } else {
            return back()->with('error', 'Please upload a valid image.');
        }
    }





    // =========================================data update=========================================================
    public function home_banner_data_update(Request $request, $id)
    {
        $validated = $request->validate([
            'title' => 'string',
            'description' => 'string',
            'banner_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $banner = AdminHomeBannerModel::find($id);

        if ($banner) {
            if ($request->hasFile('banner_image')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $banner->banner_image))) {
                    unlink(public_path('storage/' . $banner->banner_image));
                }

                // Store the new image
                $file = $request->file('banner_image');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/banners', $fileName, 'public');
                $banner->banner_image = $filePath;
            }

            $banner->title = $request->input('title');
            $banner->description = $request->input('description');
            $banner->save();

            return back()->with('success', 'Banner updated successfully!');
        } else {
            return back()->with('error', 'Banner not found.');
        }
    }







    // =========================================data delete============================================================
    public function home_banner_data_delete($id)
    {
        $banner = AdminHomeBannerModel::find($id);

        if ($banner) {
            // Delete the banner image
            if (file_exists(public_path('storage/' . $banner->banner_image))) {
                unlink(public_path('storage/' . $banner->banner_image));
            }

            $banner->delete();
            return back()->with('success', 'Banner deleted successfully!');
        } else {
            return back()->with('error', 'Banner not found.');
        }
    }


    // =====================================================================================================================================================
    // =========================>>>>>>>>>>>>>>>>>>>>>>>> BANNER DATA END <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<================================================
    // =====================================================================================================================================================






















    // =====================================================================================================================================================
    // =========================>>>>>>>>>>>>>>>>>>>>>>>> FUTURE FOCUS DATA START <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<========================================
    // =====================================================================================================================================================



    // ================================================future focus add================================================
    public function future_focus_add(Request $request)
    {
        $validated = $request->validate([
            'future_title' => 'string',
            'future_description' => 'string',
            'future_sports_icon' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($request->hasFile('future_sports_icon')) {
            $file = $request->file('future_sports_icon');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/future', $fileName, 'public');


            AdminHomeFutureFocusModel::create([
                'future_title' => $request->input('future_title'),
                'future_description' => $request->input('future_description'),
                'future_sports_icon' => $filePath,
            ]);

            return back()->with('success', 'Banner added successfully!');
        } else {
            return back()->with('error', 'Please upload a valid image.');
        }
    }




    // ================================================future focus update================================================
    public function future_focus_update(Request $request, $id)
    {
        $validated = $request->validate([
            'future_title' => 'string',
            'future_description' => 'string',
            'future_sports_icon' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $futureData = AdminHomeFutureFocusModel::find($id);

        if ($futureData) {
            if ($request->hasFile('future_sports_icon')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $futureData->future_sports_icon))) {
                    unlink(public_path('storage/' . $futureData->future_sports_icon));
                }

                // Store the new image
                $file = $request->file('future_sports_icon');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/future', $fileName, 'public');
                $futureData->future_sports_icon = $filePath;
            }

            $futureData->future_title = $request->input('future_title');
            $futureData->future_description = $request->input('future_description');
            $futureData->save();

            return back()->with('success', 'Future focus updated successfully!');
        } else {
            return back()->with('error', 'Future focus not found.');
        }
    }





    // ================================================future focus delete================================================
    public function future_focus_delete($id)
    {
        $futureData = AdminHomeFutureFocusModel::find($id);

        if ($futureData) {
            // Delete the image file
            if (file_exists(public_path('storage/' . $futureData->future_sports_icon))) {
                unlink(public_path('storage/' . $futureData->future_sports_icon));
            }

            // Delete the record
            $futureData->delete();

            return back()->with('success', 'Future focus deleted successfully!');
        } else {
            return back()->with('error', 'Future focus not found.');
        }
    }




    // =====================================================================================================================================================
    // =========================>>>>>>>>>>>>>>>>>>>>>>>> FUTURE FOCUS DATA END <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<==========================================
    // =====================================================================================================================================================



















    // =====================================================================================================================================================
    // =========================>>>>>>>>>>>>>>>>>>>>>>>> COLLBORATION DATA START <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<========================================
    // =====================================================================================================================================================



    // ======================================================add========================================
    public function collaboration_add(Request $request)
    {
        $validated = $request->validate([
            'collab_name' => 'string',
            'collab_logo' => 'required|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        if ($request->hasFile('collab_logo')) {
            $file = $request->file('collab_logo');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/collab', $fileName, 'public');

            AdminHomecollaborationModel::create([
                'collab_name' => $request->input('collab_name'),
                'collab_logo' => $filePath,
            ]);

            return back()->with('success', 'Collaboration added successfully!');
        } else {
            return back()->with('error', 'Please upload a valid image.');
        }
    }




    // ======================================================update========================================
    public function collaboration_update(Request $request, $id)
    {
        $validated = $request->validate([
            'collab_name' => 'string',
            'collab_logo' => 'nullable|image|mimes:jpeg,png,jpg,gif,webp|max:2048',
        ]);

        $collabData = AdminHomecollaborationModel::find($id);

        if ($collabData) {
            if ($request->hasFile('collab_logo')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $collabData->collab_logo))) {
                    unlink(public_path('storage/' . $collabData->collab_logo));
                }

                // Store the new image
                $file = $request->file('collab_logo');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/collab', $fileName, 'public');
                $collabData->collab_logo = $filePath;
            }

            $collabData->collab_name = $request->input('collab_name');
            $collabData->save();

            return back()->with('success', 'Collaboration updated successfully!');
        } else {
            return back()->with('error', 'Collaboration not found.');
        }
    }




    // ======================================================delete========================================
    public function collaboration_delete($id)
    {
        $collabData = AdminHomecollaborationModel::find($id);

        if ($collabData) {
            // Delete the image file
            if (file_exists(public_path('storage/' . $collabData->collab_logo))) {
                unlink(public_path('storage/' . $collabData->collab_logo));
            }

            // Delete the record
            $collabData->delete();

            return back()->with('success', 'Collaboration deleted successfully!');
        } else {
            return back()->with('error', 'Collaboration not found.');
        }
    }



    // =====================================================================================================================================================
    // =========================>>>>>>>>>>>>>>>>>>>>>>>> COLLBORATION DATA END <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<==========================================
    // =====================================================================================================================================================





















    // =====================================================================================================================================================
    // =========================>>>>>>>>>>>>>>>>>>>>>>>> Company email & phone DATA start <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<===============================
    // =====================================================================================================================================================




    // ======================================================update========================================
    public function company_details_update(Request $request, $id)
    {
        // Validate the incoming request
        $validated = $request->validate([
            'company_email' => 'required|email',
            'company_phone' => 'required|string',
        ]);

        // Find the company record by ID
        $companyData = AdminHomeCompanyEmailPhoneModel::find($id);

        if ($companyData) {
            // Update the company details
            $companyData->company_email = $request->input('company_email');
            $companyData->company_phone = $request->input('company_phone');
            $companyData->save();

            return back()->with('success', 'Company details updated successfully!');
        } else {
            return back()->with('error', 'Company not found.');
        }
    }





    // =====================================================================================================================================================
    // =========================>>>>>>>>>>>>>>>>>>>>>>>> Company email & phone DATA end <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<=================================
    // =====================================================================================================================================================



















    // =====================================================================================================================================================
    // =========================>>>>>>>>>>>>>>>>>>>>>>>> Sports Category DATA start <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<=====================================
    // =====================================================================================================================================================




    // ====================================================== Add Sports Category =========================================
    public function sports_category_add(Request $request)
    {
        $validated = $request->validate([
            'category_name' => 'required|string',
        ]);

        AdminHomeSportsCategoryModel::create([
            'category_name' => $request->input('category_name'),
        ]);

        return back()->with('success', 'Sports category added successfully!');
    }

    // ====================================================== Update Sports Category =========================================
    public function sports_category_update(Request $request, $id)
    {
        $validated = $request->validate([
            'category_name' => 'required|string',
        ]);

        $category = AdminHomeSportsCategoryModel::find($id);

        if ($category) {
            $category->category_name = $request->input('category_name');
            $category->save();

            return back()->with('success', 'Sports category updated successfully!');
        } else {
            return back()->with('error', 'Sports category not found.');
        }
    }

    // ====================================================== Delete Sports Category =========================================
    public function sports_category_delete($id)
    {
        $category = AdminHomeSportsCategoryModel::find($id);

        if ($category) {
            $category->delete();

            return back()->with('success', 'Sports category deleted successfully!');
        } else {
            return back()->with('error', 'Sports category not found.');
        }
    }






    // =====================================================================================================================================================
    // =========================>>>>>>>>>>>>>>>>>>>>>>>> Sports Category DATA end <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<=======================================
    // =====================================================================================================================================================























    // =====================================================================================================================================================
    // =========================>>>>>>>>>>>>>>>>>>>>>>>> Sports Information DATA start <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<=====================================
    // =====================================================================================================================================================




    // ====================================================== Add Sports Information =========================================
    public function sports_information_add(Request $request)
    {
        $validated = $request->validate([
            'sports_image' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'sports_category' => 'string',
            'sports_title' => 'string',
            'sports_description' => 'string',
            'sports_date' => 'date',
            'sports_time' => 'date_format:H:i',
        ]);

        // Handle the image upload
        if ($request->hasFile('sports_image')) {
            $file = $request->file('sports_image');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/sports', $fileName, 'public');
        }

        // Create a new sports information record
        AdminHomeSportsInformationModel::create([
            'sports_image' => $filePath ?? null,
            'sports_category' => $request->input('sports_category'),
            'sports_title' => $request->input('sports_title'),
            'sports_description' => $request->input('sports_description'),
            'sports_date' => $request->input('sports_date'),
            'sports_time' => $request->input('sports_time'),
        ]);

        return back()->with('success', 'Sports information added successfully!');
    }


    // ====================================================== Update Sports Information =========================================
    public function sports_information_update(Request $request, $id)
    {
        // Validate incoming request data
        $validated = $request->validate([
            'sports_image' => 'nullable|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'sports_category' => 'nullable|string',
            'sports_title' => 'nullable|string',
            'sports_description' => 'nullable|string',
            'sports_date' => 'nullable|date',
            'sports_time' => 'nullable|date_format:H:i',
        ]);

        // Find the sports information record by ID
        $sportsInfo = AdminHomeSportsInformationModel::find($id);

        if ($sportsInfo) {
            // Handle file upload if a new image is provided
            if ($request->hasFile('sports_image')) {
                // Check if the old image exists and delete it
                $oldImagePath = $sportsInfo->sports_image;
                if ($oldImagePath && file_exists(public_path('storage/' . $oldImagePath))) {
                    unlink(public_path('storage/' . $oldImagePath));
                }

                // Store the new image
                $file = $request->file('sports_image');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/sports', $fileName, 'public');
                $sportsInfo->sports_image = $filePath;
            }

            // Update other fields
            $sportsInfo->sports_category = $request->input('sports_category', $sportsInfo->sports_category);
            $sportsInfo->sports_title = $request->input('sports_title', $sportsInfo->sports_title);
            $sportsInfo->sports_description = $request->input('sports_description', $sportsInfo->sports_description);
            $sportsInfo->sports_date = $request->input('sports_date', $sportsInfo->sports_date);
            $sportsInfo->sports_time = $request->input('sports_time', $sportsInfo->sports_time);

            // Save the updated record
            $sportsInfo->save();

            return back()->with('success', 'Sports information updated successfully!');
        } else {
            return back()->with('error', 'Sports information not found.');
        }
    }



    // ====================================================== Delete Sports Information =========================================
    public function sports_information_delete($id)
    {
        $sportsInfo = AdminHomeSportsInformationModel::find($id);

        if ($sportsInfo) {
            // Delete the image file
            if (file_exists(public_path('storage/' . $sportsInfo->sports_image))) {
                unlink(public_path('storage/' . $sportsInfo->sports_image));
            }

            // Delete the record
            $sportsInfo->delete();

            return back()->with('success', 'Sports information deleted successfully!');
        } else {
            return back()->with('error', 'Sports information not found.');
        }
    }







    // =====================================================================================================================================================
    // =========================>>>>>>>>>>>>>>>>>>>>>>>> Sports Information DATA end <<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<<=======================================
    // =====================================================================================================================================================

}
