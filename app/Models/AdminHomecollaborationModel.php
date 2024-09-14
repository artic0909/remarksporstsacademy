<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminHomecollaborationModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'collab_logo',
        'collab_name',
    ];
}
