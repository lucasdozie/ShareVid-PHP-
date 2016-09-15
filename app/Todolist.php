<?php

namespace todoparrot;

use Illuminate\Database\Eloquent\Model;

class Todolist extends Model
{
    //
    public function getNameAndDescriptionAtrribute(){
    	return $this->name.''.$this->description;
    }
}
