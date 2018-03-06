<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class producecategory extends Model
{
    public $fillable = ['name','parent_id'];




public function childs() {
	
        return $this->hasMany('App\Models\producecategory','parent_id','id') ;

}

}