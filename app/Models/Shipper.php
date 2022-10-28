<?php

namespace App\Models;
use App\Traits\Multitenntfilter;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Shipper
 *
 * @property $id
 * @property $name
 * @property $Fname
 * @property $lname
 * @property $Email
 * @property $role_id
 * @property $address1
 * @property $address2
 * @property $city_id
 * @property $state_id
 * @property $country_id
 * @property $postalcode
 * @property $phone
 * @property $fax
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Shipper extends Model
{
use Multitenntfilter;

    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','Fname','lname','Email','role_id','address1','address2','city_id','state_id','country_id','postalcode','phone','fax','user_id'];

    public function country(){
        return $this->belongsTo(Country::class);
    }
    public function state()
    {
        return $this->belongsTo(State::class);
    }
    public function city()
    {
        return $this->belongsTo(City::class);
    }


}
