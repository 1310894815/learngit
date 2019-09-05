<?php

namespace App\Http\Resources;

use App\Post;
use Illuminate\Http\Resources\Json\JsonResource;

class PostResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($Post)
    {
       return [
           'id' => $this->id,
           'title' => $this->title,
           'userList' => ''
           //'user_name' => new UserResource($this->user)
       ];
        return [
            'id' => 1,
            'user_info' => '',//new UserResource($this->user)
        ];
    }
}
