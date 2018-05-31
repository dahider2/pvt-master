<?php

namespace App\Models;

use App\Models\City;
use Illuminate\Database\Eloquent\Model;

class CityArea extends Model
{
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
