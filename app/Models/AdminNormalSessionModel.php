<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminNormalSessionModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'ns_icons',
        'ns_desc',
    ];
}
