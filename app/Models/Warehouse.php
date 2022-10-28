<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Warehouse
 *
 * @property $id
 * @property $name
 * @property $short_code
 * @property $address1
 * @property $address2
 * @property $city_id
 * @property $state_id
 * @property $country_id
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Warehouse extends Model
{
    
    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','short_code','address1','address2','city_id','state_id','country_id'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }
    public function shipments()
    {
        return $this->hasMany(Billoflading::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class,'id','state_id');
    }
    
      public function state()
    {
        return $this->belongsTo(State::class);
    }

}
