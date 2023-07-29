<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostShowResource extends JsonResource
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
            'news_content' => $this->news_content,
            'created_at' => Carbon::parse($this->created_at)->format('Y-m-d'),
            'author' => $this->author,
            'writer' => $this->whenLoaded('writer'),
            // 'writer' => $this->writer,
            // 'writer' => $this->whenLoaded('writer', function () {
            //     return [
            //         'id' => $this->writer->id,
            //         'username' => $this->writer->username,
            //     ];
            // }),
        ];
    }
}
