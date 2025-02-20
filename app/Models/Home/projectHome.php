<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class projectHome extends Model
{
    use HasFactory;
    protected $fillable =[
        'name',
        'description',
        'img'
    ];

}
