<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AdminRSPLstoreModel extends Model
{
    use HasFactory;

    protected $fillable = [
        'rs_img',
        'rs_title',
        'rs_price',
        'rs_discount',
        'rs_link',
    ];
}
