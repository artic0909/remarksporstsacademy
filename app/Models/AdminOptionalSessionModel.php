<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminOptionalSessionModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'ps_icons',
        'ps_desc',
    ];
}
