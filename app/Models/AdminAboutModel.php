<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminAboutModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'all_banner_image',
    ];
}
