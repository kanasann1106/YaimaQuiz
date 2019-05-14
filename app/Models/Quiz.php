<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
	public function user()
	{
		return $this->belongsTo('App\User');
	}

	public function category()
	{
		return $this->belongsTo('App\Models\Category');
	}

	public function region()
	{
		return $this->belongsTo('App\Models\Region');
	}
}
