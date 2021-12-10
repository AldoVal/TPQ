<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Gate;
use App\Models\User;
// use App\Providers\Gate;


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
      Gate::define('admin',function(User $user){
          return $user->role ==='Admin';
      });

      Gate::define('santri',function(User $user){
        return $user->role ==='Santri';
    });

    Gate::define('guru',function(User $user){
        return $user->role ==='guru';
    });
    }


}
