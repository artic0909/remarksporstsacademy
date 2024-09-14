<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminTournamentsCategoryModel extends Model
{
    use HasFactory;

    protected $fillable = [
        't_category',
    ];
}
