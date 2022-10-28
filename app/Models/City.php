<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * Class City
 *
 * @property $id
 * @property $name
 * @property $state_id
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class City extends Model
{

    static $rules = [
		'name' => 'required',
		'state_id' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','state_id'];

    public function state()
    {
        return $this->belongsTo(State::class);
    }

}
