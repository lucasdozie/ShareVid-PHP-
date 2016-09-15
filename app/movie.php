<?php

namespace todoparrot;

use Illuminate\Database\Eloquent\Model;

class movie extends Model
{
    //
    protected $fillable = [
    'title', 'category', 'link', 'rating', 'description'
    ];

    public function categories(){
    	return $this->belongsToMany('todoparrot\category')->withtimestamps();
    }
    
    public function users(){
    	return $this->belongsToMany('todoparrot\user');
    }
}
