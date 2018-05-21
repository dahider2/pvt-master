<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Annonce extends Model
{
    //
    protected $fillable =[
      'unique_value',
      'photos_id',
      'title',
      'description',
      'price',
      'city',
      'filename'
    ];
}
