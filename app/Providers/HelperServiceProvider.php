<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;

class HelperServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $file = app_path('Helpers/Keywords.php');
        require_once($file);
        $file = app_path('Helpers/Papers.php');
        require_once($file);
        $file = app_path('Helpers/Users.php');
        require_once($file);
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
//
