<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class SkillSuperCategory extends JsonResource
{
    public static $wrap = "categories";

    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return parent::toArray($request);
    }

    public function with($request)
    {
        return [
            'version' => '1.0.0',
            'author_link' => 'https://github.com/AnthonyAngatia'
        ];
    }


    // public function with($request)
    // {
    //     return  [
    //         'version' => '1.0.0',
    //     ];
    // }
}
