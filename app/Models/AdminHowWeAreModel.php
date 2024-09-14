<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminHowWeAreModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'who_image',
        'who_title',
        'who_desc',
        'who_date',
        'who_time',
    ];
}
