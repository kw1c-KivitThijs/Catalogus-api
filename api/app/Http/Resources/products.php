<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class products extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray($request): array
    {
        return [
            'name' => $this->name,
            'price' => $this->price,
            'slug' => $this->slug,
            'mainimage_url' => $this->mainimage_url,
            'sideimage_url' => $this->sideimage_url,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }

    public static $wrap = null;
}
