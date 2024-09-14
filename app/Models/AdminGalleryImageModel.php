<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminGalleryImageModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'g_image',
    ];
}
