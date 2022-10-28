<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class Setting
 *
 * @property $id
 * @property $name
 * @property $Fname
 * @property $lname
 * @property $Email
 * @property $address1
 * @property $address2
 * @property $city_id
 * @property $state_id
 * @property $country_id
 * @property $postalcode
 * @property $phone
 * @property $fax
 * @property $termConditions
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Setting extends Model
{

    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','fname','lname','email','address1','address2','city_id','state_id','country_id','postalcode','phone','fax','termConditions','signatory_company'];



}
