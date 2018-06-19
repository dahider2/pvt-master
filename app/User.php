<?php

namespace App;

use App\Models\Chat;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'mobile','password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function isAdmin()
    {
        return (\Auth::check() && $this->isAdmin == 1);
    }

    public function notAdmin()
    {
        return (\Auth::check() && $this->isAdmin != 1);
    }

    public function conversations()
    {
        return $this->hasMany(Chat::class);
    }
}
