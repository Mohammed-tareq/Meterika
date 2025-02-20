<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SliderResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id'=>$this->id,
            'slider_img_one'=>$this->slider_img_one,
            'slider_img_two'=>$this->slider_img_two,
            'slider_video'=>$this->slider_video,
        ];
    }
}
