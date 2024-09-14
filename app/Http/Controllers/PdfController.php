<?php

namespace App\Http\Controllers;

use App\Models\AdminStudentAdmissionModel;
use Illuminate\Http\Request;
use Barryvdh\DomPDF\PDF;

class PdfController extends Controller
{
    public function pdf_create($id)
    {
        $student =AdminStudentAdmissionModel::findOrFail($id);
        return view("admin.admin_pdf", compact('student'));
    }
}
