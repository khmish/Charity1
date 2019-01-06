<?php

namespace App\Http\Resources;
use App\Http\Resources\User as UserCollection;
use Illuminate\Http\Resources\Json\JsonResource;
use App\Http\Resources\Comment as CommentCollection;
class Blog extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array
     */
    public function toArray($request)
    {
        //return parent::toArray($request);
        return [
            'id' => $this->id,
            'title' => $this->title,
            'user'=> $this->usrMe,
            'comment'=>CommentCollection::collection($this->commentMe),
        ];
    }
}
