<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminAboutMissionModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'mission',
    ];
}
