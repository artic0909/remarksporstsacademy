<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminTournamentsInformationModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'td_image',
        'td_category',
        'td_title',
        'td_add',
        'td_date',
        'td_time',
        'td_desc',
    ];
}
