<?php

namespace App\Models;

use App\Models\Item;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  protected $fillable = ['filename', 'item_id','created_at','updated_at'];

     public function item()
    {
        return $this->belongsTo(Item::class);
    }

}
