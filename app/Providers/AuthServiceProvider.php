<?php

namespace App\Providers;

use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
        Gate::define('Admin', function($user){
            return count(array_intersect(['Admin'], json_decode($user->roles)));
        });
        Gate::define('JenisMobil', function($user){
            return count(array_intersect(['JenisMobil'], json_decode($user->roles)));
        });
        //
    }
}
