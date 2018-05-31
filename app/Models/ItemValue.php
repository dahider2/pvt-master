<?php

namespace App\Models;

use App\Models\Item;
use App\Models\ItemOption;
use Illuminate\Database\Eloquent\Model;

class ItemValue extends Model
{
     /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function item()
    {
        return $this->belongsTo(Item::class);
    }


     /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function item_option()
    {
        return $this->belongsTo(ItemOption::class);
    }
}
