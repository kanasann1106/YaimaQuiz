<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Quiz extends Model
{
	use SoftDeletes;
	protected $dates = ['deleted_at'];

	public function user()
	{
		return $this->belongsTo('App\User');
	}

	// public function category()
	// {
	// 	return $this->belongsTo('App\Models\Category');
	// }

	// public function region()
	// {
	// 	return $this->belongsTo('App\Models\Region');
	// }
}
