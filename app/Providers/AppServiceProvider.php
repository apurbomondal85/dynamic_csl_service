<?php

namespace App\Providers;

use App\Models\Solution;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

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
        // Use Bootstrap for pagination
        Paginator::useBootstrap();

        // Custom validation rule for phone numbers
        Validator::extend('phone_number', function ($attribute, $value, $parameters) {
            $has_plus = Str::startsWith($value, '+'); // cleaner than substr
            $mobile_arr = explode('-', $value);

            return $has_plus && count($mobile_arr) === 2 && is_numeric($mobile_arr[1]);
        });

        // Share featured solutions globally to all views
        view()->share('solutions', \App\Models\Solution::where('is_featured', 1)->get());
    }
}
