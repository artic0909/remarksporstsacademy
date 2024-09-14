<?php

namespace App\Http\Controllers;

use App\Models\AdminStudentAdmissionModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use Symfony\Component\HttpFoundation\StreamedResponse;

class AdminAdmissionFormController extends Controller
{
    public function all_form_get()
    {
        $formDatas = AdminStudentAdmissionModel::orderBy('created_at', 'desc')->get();

        return view('admin.admin_addmission', compact('formDatas'));
    }



    public function all_form_update(Request $request, $id)
    {
        $validated = $request->validate([
            'st_img' => 'image|mimes:jpeg,png,jpg,gif,webp|max:2048',
            'cer_dob' => 'mimes:pdf|max:2048',
            'cer_fit' => 'mimes:pdf|max:2048',
            'name' => 'string',
            'gender' => 'string',
            'dob' => 'date',
            'f_name' => 'string',
            'm_name' => 'string',
            'nationality' => 'string',
            'add' => 'string',
            'pin_no' => 'string',
            'tele' => 'string',
            'mob' => 'string',
            'email' => 'string',
            'height' => 'string',
            'weight' => 'string',
            'medical_history' => 'string',
            'health_problemms' => 'string',

        ]);

        $admissionInfo = AdminStudentAdmissionModel::find($id);
        if ($admissionInfo) {

            if ($request->hasFile('st_img')) {

                if (file_exists(public_path('storage/' . $admissionInfo->st_img))) {
                    unlink(public_path('storage/' . $admissionInfo->st_img));
                }


                $file = $request->file('st_img');
                $fileName = time() . '_' . $file->getClientOriginalName();
                $filePath = $file->storeAs('uploads/admission', $fileName, 'public');
                $admissionInfo->st_img = $filePath;
            }


            if ($request->hasFile('cer_dob')) {

                if (file_exists(public_path('storage/' . $admissionInfo->cer_dob))) {
                    unlink(public_path('storage/' . $admissionInfo->cer_dob));
                }


                $pdf = $request->file('cer_dob');
                $pdfName = time() . '_' . $pdf->getClientOriginalName();
                $pdfPath = $pdf->storeAs('uploads/admission', $pdfName, 'public');
                $admissionInfo->cer_dob = $pdfPath;
            }


            if ($request->hasFile('cer_fit')) {

                if (file_exists(public_path('storage/' . $admissionInfo->cer_fit))) {
                    unlink(public_path('storage/' . $admissionInfo->cer_fit));
                }


                $pdf = $request->file('cer_fit');
                $pdfName = time() . '_' . $pdf->getClientOriginalName();
                $pdfPath = $pdf->storeAs('uploads/admission', $pdfName, 'public');
                $admissionInfo->cer_fit = $pdfPath;
            }


            $admissionInfo->name = $request->input('name');
            $admissionInfo->gender = $request->input('gender');
            $admissionInfo->dob = $request->input('dob');
            $admissionInfo->f_name = $request->input('f_name');
            $admissionInfo->m_name = $request->input('m_name');
            $admissionInfo->nationality = $request->input('nationality');
            $admissionInfo->add = $request->input('add');
            $admissionInfo->pin_no = $request->input('pin_no');
            $admissionInfo->tele = $request->input('tele');
            $admissionInfo->mob = $request->input('mob');
            $admissionInfo->email = $request->input('email');
            $admissionInfo->height = $request->input('height');
            $admissionInfo->weight = $request->input('weight');
            $admissionInfo->medical_history = $request->input('medical_history');
            $admissionInfo->health_problemms = $request->input('health_problemms');


            $admissionInfo->save();

            return back()->with('success', 'Updated successfully!');
        } else {
            return back()->with('error', 'Record not found.');
        }
    }



    public function downloadDocument($type, $id)
    {
        // Find the admission info by ID
        $admissionInfo = AdminStudentAdmissionModel::find($id);

        if (!$admissionInfo) {
            return abort(404, 'Document not found.');
        }

        // Determine the file path based on the document type
        switch ($type) {
            case 'cer_dob':
                $filePath = $admissionInfo->cer_dob;
                break;
            case 'cer_fit':
                $filePath = $admissionInfo->cer_fit;
                break;
            default:
                return abort(404, 'Document not found.');
        }

        // Check if the file exists
        if (!$filePath || !Storage::exists('public/' . $filePath)) {
            return abort(404, 'Document not found.');
        }

        // Extract the file name from the path
        $fileName = basename($filePath);

        // Download the file with the correct name and extension
        return Storage::download('public/' . $filePath, $fileName);
    }


}
