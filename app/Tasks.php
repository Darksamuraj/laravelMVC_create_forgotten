<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Tasks extends Model
{
	public static function incomplete(){
		return static::where('completed', 0)->get();
	}
    //
}
