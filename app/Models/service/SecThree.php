<?php

namespace App\Models\service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecThree extends Model
{
    use HasFactory;
    protected $fillable=[
        'title_1',
            'txt_1',
            'img_1',
        'title_2',
            'txt2_1',
        'img_2'
    ];
}
