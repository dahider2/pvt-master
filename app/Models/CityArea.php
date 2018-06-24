<?php

namespace App\Models;

use App\Models\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class CityArea extends Model
{
	use SoftDeletes;
	protected $fillable =['city_id','name'];
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
