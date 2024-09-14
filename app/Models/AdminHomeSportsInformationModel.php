<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminHomeSportsInformationModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'sports_image',
        'sports_category',
        'sports_title',
        'sports_description',
        'sports_date',
        'sports_time',
    ];
}
