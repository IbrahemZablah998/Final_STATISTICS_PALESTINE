<?php

namespace App\Models;

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
    protected $table = 'users';

    protected $fillable = [
        'firstName', 'secondName', 'thirdName', 'fourthName', 'idNum', 'city', 'email', 'phoneNum', 'privilige', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function family__data()
    {
        return $this->hasMany(family__data::class);
    }

    public function family__data_learnings()
    {
        return $this->hasMany(family__data_learnings::class);
    }

    public function family__data_works()
    {
        return $this->hasMany(family__data_works::class);
    }

    public function family__data_marriages()
    {
        return $this->hasMany(amily__data_marriages::class);
    }

    public function housing_datas()
    {
        return $this->hasMany(housing_datas::class);
    }

    public function utilities_and_goods()
    {
        return $this->hasMany(utilities_and_goods::class);
    }

    public function information_technologies()
    {
        return $this->hasMany(information_technologies::class);
    }

    public function housing_data_dead()
    {
        return $this->hasMany(housing_data_dead::class);
    }
}
