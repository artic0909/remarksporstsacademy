<?php

namespace App\Http\Controllers;

use App\Models\AdminGalleryImageModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage; // Import the Storage facade


class AdminGalleryController extends Controller
{


    public function all_gallery_get()
    {
        $galleryImageDatas = AdminGalleryImageModel::orderBy('created_at', 'desc')->get();

        return view('admin.admin_galleryPage', compact('galleryImageDatas'));
    }









    // =====================================================Galery images================================================================================================

    public function all_galleryImage_add(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'g_image' => 'image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        // Handle image uploads
        $filePaths = [
            'g_image' => null,
        ];

        foreach ($filePaths as $key => &$value) {
            if ($request->hasFile($key)) {
                $file = $request->file($key);
                $fileName = time() . '_' . $file->getClientOriginalName();
                $value = $file->storeAs('allgimage', $fileName, 'public');
            }
        }

        // Create a new banner record
        AdminGalleryImageModel::create([
            'g_image' => $filePaths['g_image'],
        ]);

        return back()->with('success', 'Banner added successfully!');
    }


    public function all_galleryImage_update(Request $request, $id)
    {
        // Validate the request data
        $validated = $request->validate([
            'g_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg,webp|max:2048',
        ]);

        // Find the banner
        $banner = AdminGalleryImageModel::find($id);

        if ($banner) {
            // Handle image uploads
            $filePaths = [
                'g_image' => $banner->g_image,
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
                'g_image' => $filePaths['g_image'],
            ]);

            return back()->with('success', 'Banner updated successfully!');
        } else {
            return back()->with('error', 'Banner not found.');
        }
    }


    public function all_galleryImage_delete($id)
    {
        $banner = AdminGalleryImageModel::findOrFail($id);

        // Delete associated images from storage if necessary
        if ($banner->g_image) {
            Storage::disk('public')->delete($banner->g_image);
        }

        // Delete the banner record from the database
        $banner->delete();

        return redirect()->back()->with('success', 'Banner deleted successfully!');
    }
}
