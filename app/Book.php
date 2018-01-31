<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Book extends Model
{
    protected $fillable = ['title','price','abstract','author_id'];

	public function author() {
	return $this->belongsTo('App\Author');
	}

	public function publishers() {
	return $this->belongsToMany('App\Publisher');
	}

}
