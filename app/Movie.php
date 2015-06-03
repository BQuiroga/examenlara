<?php namespace App;

use Illuminate\Database\Eloquent\Model;

class Movie extends Model {

	protected $fillable = ['name', 'description'];
	
	public function reviews()
	{
		return $this->hasMany('App\Review');
	}

	public function movie()
	{
		return $this->belongsTo('App\Movie');
	}

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function ratings()
	{
		return $this->hasMany('App\Rating');
	}

	public function likes()
	{
		return $this->hasMany('App\Like');
	}
}