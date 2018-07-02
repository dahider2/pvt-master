<?php

namespace App\Models;

use App\Models\Item;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
  protected $fillable = ['filename', 'item_id'];
  
     public function item()
    {
        return $this->belongsTo(Item::class);
    }

}
