<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminAboutFounderModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'founder_img',
        'founder_desc',
    ];
}
