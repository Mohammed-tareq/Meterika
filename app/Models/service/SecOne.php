<?php

namespace App\Models\service;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class SecOne extends Model
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
            'txt_7',
            'txt_8',
            'txt_9',
            'txt_10',
            'txt_11',
            'txt_12',
        'title_2',
            'txt2_1',
            'txt2_2',
            'txt2_3',
            'txt2_4',
            'txt2_5',
            'txt2_6',
            'txt2_7',
            'txt2_8',
        'img'
    ];

}
