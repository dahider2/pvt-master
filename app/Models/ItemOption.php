<?php

namespace App\Models;
use Illuminate\Database\Eloquent\SoftDeletes;
use App\Models\Category;
use Illuminate\Database\Eloquent\Model;

class ItemOption extends Model
{
use SoftDeletes;

    protected $fillable = ['category_id','name'];
     /**
     * The attributes that should be mutated to dates.
     *
     * @var array
     */
    protected $dates = ['deleted_at'];
    

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
