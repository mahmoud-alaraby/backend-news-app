<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Setting extends Model
{
    use HasFactory;

    protected $fillable = [
        'site_name',
        'fav_icon',
        'logo',
        'facebook',
        'twitter',
        'youtube',
        'street',
        'city',
        'country',
        'email',
        'phone',
    ];
}
