<?php

namespace App\Http\Controllers;

use App\Models\AdminOptionalSessionModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;

class AdminOptionalSessionController extends Controller
{



    public function all_optionalSession_get()
    {
        $optionalSessionDatas = AdminOptionalSessionModel::orderBy('created_at', 'desc')->get();

        return view('admin.admin_optionalSession', compact('optionalSessionDatas'));
    }








    public function all_optionalSession_add(Request $request)
    {

        $validated = $request->validate([
            'ps_icons' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'ps_desc' => 'string',
        ]);

        // Handle the image upload
        if ($request->hasFile('ps_icons')) {
            $file = $request->file('ps_icons');
            $fileName = time() . '_' . $file->getClientOriginalName();
            $filePath = $file->storeAs('uploads/ps', $fileName, 'public');
        }

        // Create a new sports information record
        AdminOptionalSessionModel::create([
            'ps_icons' => $filePath ?? null,
            'ps_desc' => $request->input('ps_desc'),
        ]);

        return back()->with('success', 'Sports information added successfully!');
    }








    public function all_optionalSession_update(Request $request, $id)
    {
        $validated = $request->validate([
            'ps_icons' => 'mimes:jpeg,png,jpg,gif,webp|max:2048',
            'ps_desc' => 'string',
        ]);

        $optionalSessionInfo = AdminOptionalSessionModel::find($id);

        if ($optionalSessionInfo) {
            if ($request->hasFile('ps_icons')) {
                // Delete the old image
                if (file_exists(public_path('storage/' . $optionalSessionInfo->ps_icons))) {
                    unlink(public_path('storage/' . $optionalSessionInfo->ps_icons));
                }

                // Store the new image
                $file = $request->file('ps_icons');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/ps', $fileName, 'public');
                $optionalSessionInfo->ps_icons = $filePath;
            }

            $optionalSessionInfo->ps_desc = $request->input('ps_desc');
            $optionalSessionInfo->save();

            return back()->with('success', 'who information updated successfully!');
        } else {
            return back()->with('error', 'who information not found.');
        }
    }








    public function all_optionalSession_delete($id)
    {
        $optionalSessionInfo = AdminOptionalSessionModel::find($id);

        if ($optionalSessionInfo) {
            // Delete the image file
            if (file_exists(public_path('storage/' . $optionalSessionInfo->ps_icons))) {
                unlink(public_path('storage/' . $optionalSessionInfo->ps_icons));
            }

            // Delete the record
            $optionalSessionInfo->delete();

            return back()->with('success', 'who information deleted successfully!');
        } else {
            return back()->with('error', 'who information not found.');
        }
    }
}
