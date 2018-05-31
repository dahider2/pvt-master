<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\CityArea;
use App\Models\Country;


class City extends Model
{
    public function city_areas()
    {
        return $this->hasMany(CityArea::class);
    }


     public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
