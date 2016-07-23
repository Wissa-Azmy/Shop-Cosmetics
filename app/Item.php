<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
	protected $fillable = ['name'];

	public function supplier(){
		return $this->belongsTo(Supplier::class);
	}
    
    public function invoices(){
    	return $this->belongsToMany(Invoice::class);
    }

    public function user(){
    	return $this->belongsTo(User::class);
    }
}
