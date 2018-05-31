<?php

namespace App\Models;

use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class ItemOption extends Model
{
     public function category()
    {
        return $this->belongsTo(Category::class);
    }


     /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Item_values()
    {
        return $this->hasMany(ItemValue::class);
    }
}
