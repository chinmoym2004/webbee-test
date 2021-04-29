<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
	protected $with = ['workshops'];
	
	public function workshops()
	{
		return $this->hasMany(\App\Models\Workshop::class);
	}

}
