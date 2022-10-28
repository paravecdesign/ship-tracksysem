<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

/**
 * Class Country
 *
 * @property $id
 * @property $shortname
 * @property $name
 * @property $phonecode
 * @property $created_at
 * @property $updated_at
 * @property $deleted_at
 *
 * @property State[] $states
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Country extends Model
{
    use SoftDeletes;

    static $rules = [
		'shortname' => 'required',
		'name' => 'required',
		'phonecode' => 'required',
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['shortname','name','phonecode'];


    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function states()
    {
        return $this->hasMany('App\State', 'country_id', 'id');
    }
    

}
