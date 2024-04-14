<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Providers\Cart;

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
        view()->composer("*", function($view) {
            $view->with([
                'cart' => new Cart(),
                'wishlist' => new Wishlist
            ]);
        });
    }
}
