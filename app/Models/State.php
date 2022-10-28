<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class State
 *
 * @property $id
 * @property $name
 * @property $country_id
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class State extends Model
{

    static $rules = [
		'name' => 'required',
		'country_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','country_id'];

    public function country()
    {
        return $this->belongsTo(Country::class);
    }

    public function city()
    {
        return $this->belongsTo(City::class,'id','state_id');
    }

}
