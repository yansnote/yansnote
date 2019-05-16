<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Authors extends Model
{
    protected $fillable = [
    	'pseudonym',
    	'slug',
    	'bio',
    	'profile_picture',
    	'cover_photo',
    	'website',
    	'facebook',
    	'twitter',
    	'linked_in',
    	'youtube',
    	'instagram',
    	'github',
    	'user_id'
    ];
}
