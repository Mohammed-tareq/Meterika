<?php

namespace App\Models\service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecTwo extends Model
{
    use HasFactory;
    protected $fillable = [
        'title_1',
            'txt_1',
            'txt_2',
            'txt_3',
            'txt_4',
            'txt_5',
            'txt_6',
        'title_2',
            'txt2_1',
            'txt2_2',
            'txt2_3',
        'img'
    ];
}
