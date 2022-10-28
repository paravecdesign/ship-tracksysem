<?php

namespace App\Models;

use Illuminate\Notifications\Notifiable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;
use Illuminate\Auth\Notifications\ResetPassword;

use Illuminate\Foundation\Auth\User as Authenticatable;

/**
 * Class User
 *
 * @property $id
 * @property $name
 * @property $email
 * @property $email_verified_at
 * @property $password
 * @property $remember_token
 * @property $created_at
 * @property $updated_at
 * @property $is_admin
 * @property $agent_name
 * @property $short_code
 * @property $address1
 * @property $address2
 * @property $city_id
 * @property $state_id
 * @property $country_id
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class User extends Authenticatable
{

    static $rules = [
        'email' => 'required',
        'name' => 'required',
        'agent_name' => '',
        'short_code' => '',
        'address1' => '',
        'address2' => '',
        'city_id' => '',
        'state_id' => '',
        'country_id' => '',
        'password' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name', 'email', 'agent_name', 'short_code', 'address1', 'address2', 'city_id', 'state_id', 'country_id','password'];

    public function roles()
    {
        return $this->belongsToMany(Role::class);
    }


    public function hasAnyRoles($roles)
    {
        if ($this->roles()->whereIn('name', $roles)->first()) {
            return true;
        }
        return false;
    }
    public function hasRole($role)
    {
        if ($this->roles()->where('name', $role)->first()) {
            return true;
        }
        return false;
    }

    public function state()
    {
        return $this->belongsTo(State::class);
    }


    public function country()
    {
        return $this->belongsTo(Country::class);
    }



    public function city()
    {
        return $this->belongsTo(City::class);
    }

    public function shipments()
    {
        return $this->hasMany(Billoflading::class,'warehouse_id');
    }
}
