<?php

namespace App\Models;

use App\Models\CityArea;
use App\Models\Country;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;


class City extends Model
{
	use SoftDeletes ;
	protected $fillable = ['name','country_id'];

    public function city_areas()
    {
        return $this->hasMany(CityArea::class);
    }


     public function country()
    {
        return $this->belongsTo(Country::class);
    }
}
