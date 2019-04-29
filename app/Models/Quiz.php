<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Quiz extends Model
{
	public function user()
	{
		return $this->belongsTo('App\User');
	}
}
