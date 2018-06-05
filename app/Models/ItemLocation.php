<?php

namespace App\Models;

use App\Models\City;
use App\Models\CityArea;
use App\Models\Country;
use App\Models\Item;
use Illuminate\Database\Eloquent\Model;

class ItemLocation extends Model
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

     /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function country()
    {
        return $this->belongsTo(Country::class);
    }



     /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city_area()
    {
        return $this->belongsTo(CityArea::class);
    }


     /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function city()
    {
        return $this->belongsTo(City::class);
    }
}
