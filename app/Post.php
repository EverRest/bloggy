<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Post extends Model
{
    protected $fillable = ['name','user_id', 'category_id', 'title', 'picture', 'content'];

//    /**
//     * Get category of the post
//     */
//    public function category()
//    {
//        return $this->hasOne('App\Category');
//    }

    /**
     * Get user of the post
     */
    public function user()
    {
        return $this->belongsTo('App\User');
    }

    /**
     * Get category of the post
     */
    public function category()
    {
        return $this->belongsTo('App\User');
    }
}
