<?php

namespace App\Models;

use App\Models\Item;
use App\Models\ItemOption;
use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['name','parent_id','description'];

       public function parent()
    {
        return $this->belongsTo(self::class, 'parent_id');
    }

    public function children()
    {
        return $this->hasMany(self::class, 'parent_id');
    }
     /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function items()
    {
        return $this->hasMany(Item::class);
    }


     /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function item_options()
    {
        return $this->hasMany(ItemOption::class);
    }
}
