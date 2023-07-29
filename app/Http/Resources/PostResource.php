<?php

namespace App\Http\Resources;

use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        $age = 21;
        $myName = "Rizky Perdana Nst";

        // Jika kita menggunakan api resource kita bisa menambah field/key baru untuk di return walaupun field tersebut tidak ada di database

        return [
            'id' => $this->id,
            'title' => $this->title,
            'news_content' => $this->news_content,
            'created_at' => Carbon::parse($this->created_at)->format('Y-m-d'),
            // 'age' => $age,
            // 'name' => $myName,
        ];


        // return parent::toArray($request);
    }
}
