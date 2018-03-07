<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class produce extends Model
{
    //
    protected $fillable = ['title', 'sku', 'description', 'name', 'photos', 'email','phone'];

    public static function getUniqueSku(){
    // $dm stand for Domaine Name
        $dm = str_random(5);
        if(static::whereSku($dm)->count() != 0){
          return static::getUniqueSku();
        }
        return $dm;
  }
  
}
