<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Author extends Model
{
    protected $hidden = ['id','created_at','updated_at'];
	protected $fillable = ['name','inn','address'];

	public function books() {
	return $this->hasMany('App\Book');
	}

}
