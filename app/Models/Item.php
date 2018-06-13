<?php

namespace App\Models;

use App\Models\Category;
use App\Models\ItemLocation;
use App\Models\ItemStat;
use App\Models\ItemValue;
use App\Models\Photo;
use App\Models\User;
use Illuminate\Database\Eloquent\Model;

class Item extends Model
{
    //

public $incrementing = false;
public $keyType = 'string' ;

  /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function category()
    {
        return $this->belongsTo(Category::class);
    }

      /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function Item_location()
    {
        return $this->hasOne(ItemLocation::class);
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


       /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function photos()
    {
        return $this->hasMany(Photo::class);
    }

       /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function item_stat()
    {
        return $this->hasMany(ItemStat::class);
    }

 
}

