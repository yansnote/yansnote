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
	
	/**
	 * Get the user that owns the phone.
	 */
	public function user()
	{
		return $this->belongsTo('App\User', 'users_id', 'id');
	}
}
