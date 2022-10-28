<?php

namespace App\Providers;

use App\Models\User;
use Illuminate\Support\Facades\Gate;
use Illuminate\Support\Facades\View;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);

        // View::composer(['admin.main'], function ($view) {
        //     $view->with('user', User::with('roles')->first());

        // });
        Gate::define('IsAgent', function($user){
            return $user->hasRole('admin');
        });
        Gate::define('isAdmin', function($user){
            return $user->hasRole('admin');
        });

        // Gate::define('isAdmin', function($user) {
        //     return $user->role == 'admin';
        //  });
    }
}
