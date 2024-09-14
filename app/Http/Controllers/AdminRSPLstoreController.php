<?php

namespace App\Http\Controllers;

use App\Models\AdminRSPLstoreModel;
use Illuminate\Http\Request;

class AdminRSPLstoreController extends Controller
{


    public function all_products_get()
    {
        $producuts = AdminRSPLstoreModel::orderBy('created_at', 'desc')->get();


        return view('admin.admin_rsplStores', compact('producuts'));
    }



    public function products_add(Request $request)
    {
        $validated = $request->validate([
            'rs_img' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'rs_title' => 'string',
            'rs_price' => 'string',
            'rs_discount' => 'string',
            'rs_link' => 'string',
        ]);

        // Handle the image upload
        if ($request->hasFile('rs_img')) {
            $file = $request->file('rs_img');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/store', $fileName, 'public');
        }

        // Create a new rs information record
        AdminRSPLstoreModel::create([
            'rs_img' => $filePath ?? null,
            'rs_title' => $request->input('rs_title'),
            'rs_price' => $request->input('rs_price'),
            'rs_discount' => $request->input('rs_discount'),
            'rs_link' => $request->input('rs_link'),
        ]);

        return back()->with('success', 'rs information added successfully!');
    }



    public function products_update(Request $request, $id)
    {
        $validated = $request->validate([
            'rs_img' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'rs_title' => 'string',
            'rs_price' => 'string',
            'rs_discount' => 'string',
            'rs_link' => 'string',
        ]);

        $productInfo = AdminRSPLstoreModel::find($id);

        if ($productInfo) {
            if ($request->hasFile('rs_img')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $productInfo->rs_img))) {
                    unlink(public_path('storage/' . $productInfo->rs_img));
                }

                // Store the new image
                $file = $request->file('rs_img');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/store', $fileName, 'public');
                $productInfo->rs_img = $filePath;
            }

            $productInfo->rs_title = $request->input('rs_title');
            $productInfo->rs_price = $request->input('rs_price');
            $productInfo->rs_discount = $request->input('rs_discount');
            $productInfo->rs_link = $request->input('rs_link');
            $productInfo->save();

            return back()->with('success', 'updated successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }



    public function products_delete($id)
    {
        $productInfo = AdminRSPLstoreModel::find($id);

        if ($productInfo) {
            // Delete the image file
            if (file_exists(public_path('storage/' . $productInfo->rs_img))) {
                unlink(public_path('storage/' . $productInfo->rs_img));
            }

            // Delete the record
            $productInfo->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }
}
