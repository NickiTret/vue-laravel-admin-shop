<?php

namespace App\Http\Resources\Project;

use App\Models\Project;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class ProjectResource extends JsonResource
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
            'title' => $this->title,
            'description' => $this->descr,
            'content' => $this->content,
            'image_src' => $this->image_src,
            'preview_image_url' => $this->imageUrl,
        ];
    }
}
