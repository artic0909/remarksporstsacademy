<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminHomeCompanyEmailPhoneModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'comapny_email',
        'comapny_phone',
    ];
}
