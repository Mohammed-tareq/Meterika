<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class dashbordHome extends Model
{
    use HasFactory;
    protected $fillable = [
        'video',
        'partiner_img'
    ];
}
