<?php

namespace App\Models;

use App\Models\Item;
use Illuminate\Database\Eloquent\Model;

class ItemStat extends Model
{
     /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function item()
    {
        return $this->belongsTo(Item::class);
    }
}
