<?php

namespace App\Http\Resources\Page;

use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PageResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'name_page' => $this->name_page,
            'descr_page' => $this->descr_page,
            'link_page' => $this->link_page,
            'header_title' => $this->header_title,
            'image_src' => $this->image_src,
            'preview_image_url' => $this->imageUrl,
        ];
    }
}
