<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class ShipmentType
 *
 * @property $id
 * @property $name
 * @property $shortname
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class ShipmentType extends Model
{

    static $rules = [
		'name' => 'required',
		'shortname' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','shortname'];



}
