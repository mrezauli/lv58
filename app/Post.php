<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    //
    protected $guarded = ['id', 'user_id'];

    public function categories()
    {
        return $this->belongsToMany('App\Category')->using('App\CategoryPost');
    }

    public function comments()
    {
        return $this->morphMany('App\Comment', 'post');
    }
}
