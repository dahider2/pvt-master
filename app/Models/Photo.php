<?php

namespace App\Models;

use App\Models\Item;
use Illuminate\Database\Eloquent\Model;

class Photo extends Model
{
     public function item()
    {
        return $this->belongsTo(Item::class);
    }

}
