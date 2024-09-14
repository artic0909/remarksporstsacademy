<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminHomeFutureFocusModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'future_sports_icon',
        'future_title',
        'future_description',
    ];
}
