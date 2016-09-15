<?php

namespace todoparrot;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    protected $fillable = ['name'];

    public function movies(){
    	return $this->belongsToMany('todoparrot\movie')->withtimestamps();
    	/*return $this->belongsToMany('todoparrot\movie','category_movie','category_id','movie_id');*/
    }

}
