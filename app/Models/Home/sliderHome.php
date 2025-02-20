<?php

namespace App\Models\Home;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class sliderHome extends Model
{
    use HasFactory;
    
    protected $fillable = ['slider_img_one', 'slider_img_two', 'slider_video'];
}
