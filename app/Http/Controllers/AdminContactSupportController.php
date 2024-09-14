<?php

namespace App\Http\Controllers;

use App\Models\AdminContactSupportModel;
use Illuminate\Http\Request;

class AdminContactSupportController extends Controller
{
    public function all_contactSupport_get()
    {
        $supportDatas = AdminContactSupportModel::orderBy('created_at', 'desc')->get();

        return view('admin.admin_contactPage', compact('supportDatas'));
    }





    public function all_contactSupport_delete($id)
    {
        $cSupport = AdminContactSupportModel::find($id);

        if ($cSupport) {
            $cSupport->delete();

            return back()->with('success', 'deleted successfully!');
        } else {
            return back()->with('error', 'not found.');
        }
    }

}
