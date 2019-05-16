<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Articles extends Model
{
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'title',
        'slug', 
        'excerpt', 
        'content',
        'poster',
        'published',
        'published_at'
    ];


}
