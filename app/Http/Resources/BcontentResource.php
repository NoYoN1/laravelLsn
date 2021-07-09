<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class BcontentResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'contents' => $this->contents,
            'comment' => $this->comment,
            'trackback' => $this->trackback,
            'created_at' => $this->created_at,
        ];
    }
}
