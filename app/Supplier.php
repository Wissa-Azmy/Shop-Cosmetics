<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
	public function items(){
		return $this->hasMany(item::class);
	}
    //
}
