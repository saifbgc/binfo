<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Image extends Model
{
    //
    protected $fillable = [
		'path',	
		
		
	];
    public function listing()
	{
	   return $this->hasOne('App\Modesl\Listing');
	}
}
