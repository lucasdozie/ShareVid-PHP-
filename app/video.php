<?php

namespace todoparrot;

use Illuminate\Database\Eloquent\Model;

class video extends Model
{
    //
    protected $fillable = [
    	'name', 'category'
    ];
}
