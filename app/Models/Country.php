<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;

/**
 * Class Country
 *
 * @property $id
 * @property $name
 * @property $short_code
 * @property $created_at
 * @property $updated_at
 *
 * @package App
 * @mixin \Illuminate\Database\Eloquent\Builder
 */
class Country extends Model
{

    static $rules = [
    ];

    protected $perPage = 20;

    /**
     * Attributes that should be mass-assignable.
     *
     * @var array
     */
    protected $fillable = ['name','short_code'];


    public function state()
    {
        return $this->belongsTo(State::class);
    }


}
