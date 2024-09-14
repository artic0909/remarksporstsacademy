<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminContactSupportModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'f_name',
        'l_name',
        'add',
        'email',
        'contact',
        'message',
    ];
}
