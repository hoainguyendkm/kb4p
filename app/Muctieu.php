<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;

class Muctieu extends Model
{
	use Sluggable;
	protected $fillable = ['name'];

	public function sluggable(){
		return [
			'slug' => ['source' => 'name']
		];
	}

    public function users(){
    	return $this->hasMany('App\User');
    }
}
