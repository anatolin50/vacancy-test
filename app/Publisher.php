<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $fillable = ['name','inn','chief','address'];

	public function books() {
	return $this->belongsToMany('App\Book');
}

}
