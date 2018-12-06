<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    
    public function listing()
	{
	   return $this->hasOne('App\Modesl\Listing');
	}
}
