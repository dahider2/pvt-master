<?php

namespace App\Models;

use App\Models\City;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Country extends Model
{
    use SoftDeletes;
    protected $fillable = ['name'];
     /**
     * One to Many relation
     *
     * @return \Illuminate\Database\Eloquent\Relations\hasMany
     */
    public function cities()
    {
        return $this->hasMany(City::class);
    }
}
