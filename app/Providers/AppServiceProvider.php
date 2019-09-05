<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;


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
        //sql调试
        $sql_debug = config('database.sql_debug');
        if ($sql_debug) {

        }
        DB::listen(function ($query) {
            echo $query->sql;
            // $query->bindings
            // $query->time
        });
    }
}
