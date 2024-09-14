<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminStudentAdmissionModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'st_img',
        'name',
        'gender',
        'dob',
        'f_name',
        'm_name',
        'nationality',
        'add',
        'pin_no',
        'tele',
        'mob',
        'email',
        'height',
        'weight',
        'medical_history',
        'health_problemms',
        'cer_dob',
        'cer_fit',
    ];
}
