<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
  {
    public function category()
    {
    return $this->belongsTo('App\Category');
    }
    public function comments()
    {
      return $this->hasMany('App\Comment');
    }
    public function tags()
    {
      return $this->belongsToMany('App\Tag');
    }
    public function relatedPostsByTag()
    {
        return Post::whereHas('tags', function ($query) {
            $tagIds = $this->tags()->pluck('tags.id')->all();
            $query->whereIn('tags.id', $tagIds);
        })->where('id', '<>', $this->id)->get();
    }
}
