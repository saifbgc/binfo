<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Listing extends Model
{
    //
    protected $fillable = ['name','working_hour','category_id','user_id'];
	
	public function image()
    {
    	return $this->belongsTo('App\Models\Image');
    }
	
	
	public function category()
    {
    	return $this->belongsTo('App\Models\Category');
    }
	
}
