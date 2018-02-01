<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Publisher extends Model
{
    protected $hidden = ['id','created_at','updated_at','pivot'];
	protected $fillable = ['name','inn','chief','address'];

	public function books() {
	return $this->belongsToMany('App\Book');
}

}
