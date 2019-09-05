<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use Laravel\Scout\Searchable;


class Post extends Model
{
    //
    use Searchable;

    //索引里面的type值
    public function searchableAs() {
        return 'post';
    }

    //定义哪些字段需要使用elasticsearch搜索
    public function toSearchableArray() {
        return [
            'title'=>$this->title,
            'content'=>$this->content
        ];
    }

    public function user()
    {
        return $this->belongsTo('App\User', 'user_id', 'id');
    }



}
