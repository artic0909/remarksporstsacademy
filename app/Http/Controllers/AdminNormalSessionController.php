<?php

namespace App\Http\Controllers;

use App\Models\AdminNormalSessionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AdminNormalSessionController extends Controller
{


    // ==================================================all banners start=========================================


    public function all_normalSession_get()
    {
        $normalSessionDatas = AdminNormalSessionModel::orderBy('created_at', 'desc')->get();

        return view('admin.admin_normalSession', compact('normalSessionDatas'));
    }








    public function all_normalSession_add(Request $request)
    {

        $validated = $request->validate([
            'ns_icons' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'ns_desc' => 'string',
        ]);

        // Handle the image upload
        if ($request->hasFile('ns_icons')) {
            $file = $request->file('ns_icons');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/ns', $fileName, 'public');
        }

        // Create a new sports information record
        AdminNormalSessionModel::create([
            'ns_icons' => $filePath ?? null,
            'ns_desc' => $request->input('ns_desc'),
        ]);

        return back()->with('success', 'Sports information added successfully!');
    }








    public function all_normalSession_update(Request $request, $id)
    {
        $validated = $request->validate([
            'ns_icons' => 'mimes:jpeg,png,jpg,gif,webp|max:2048',
            'ns_desc' => 'string',
        ]);

        $normalSessionInfo = AdminNormalSessionModel::find($id);

        if ($normalSessionInfo) {
            if ($request->hasFile('ns_icons')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $normalSessionInfo->ns_icons))) {
                    unlink(public_path('storage/' . $normalSessionInfo->ns_icons));
                }

                // Store the new image
                $file = $request->file('ns_icons');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/ns', $fileName, 'public');
                $normalSessionInfo->ns_icons = $filePath;
            }

            $normalSessionInfo->ns_desc = $request->input('ns_desc');
            $normalSessionInfo->save();

            return back()->with('success', 'who information updated successfully!');
        } else {
            return back()->with('error', 'who information not found.');
        }
    }








    public function all_normalSession_delete($id)
    {
        $normalSessionInfo = AdminNormalSessionModel::find($id);

        if ($normalSessionInfo) {
            // Delete the image file
            if (file_exists(public_path('storage/' . $normalSessionInfo->ns_icons))) {
                unlink(public_path('storage/' . $normalSessionInfo->ns_icons));
            }

            // Delete the record
            $normalSessionInfo->delete();

            return back()->with('success', 'who information deleted successfully!');
        } else {
            return back()->with('error', 'who information not found.');
        }
    }
    // ==================================================all who Data end=========================================
}
