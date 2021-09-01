<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     * *
     * Remember, if you create a new service provider to contain your view composer registrations,
     * you will need to add the service provider to the providers array in the config/app.php configuration file.
     *
     * @return void
     */
    public function boot()
    {
        View::composer('*', function ($view) {
            $view->with([
                'categories' => \App\Models\Category::get(),
                'countries' => \App\Models\Country::get(),
                'no_image' => 'public/images/ads/no_image_available.png'
            ]);
            // $view->with(['categories' => \App\Models\Category::get()]);
        });
    }
}
