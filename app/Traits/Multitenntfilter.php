<?php
namespace App\Traits;
use Illuminate\Support\Facades\Gate;
use Illuminate\Database\Eloquent\Builder;

trait Multitenntfilter {
    public static function bootMultitenntfilter(){
        if(Gate::allows('admin')){
            if(auth()->check()){

                static::creating(function ($modal){
                    $modal->user_id = auth()->id();
                });
                static::addGlobalScope('user_id',function(Builder  $Builder){
                    if(auth()->check()){
                        return $Builder->where('user_id', auth()->id());
                    }
                });
            }

        }
    }
}
