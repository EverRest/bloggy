<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['title','user_id'];

    /**
     * Get posts of current category
     */
    public function posts()
    {
        return $this->hasMany('App\Post');
    }
}
