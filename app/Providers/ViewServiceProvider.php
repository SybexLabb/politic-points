<?php

namespace App\Providers;

use App\Models\cart;
use App\Models\config;
use App\Models\logo;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;

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
     *
     * @return void
     */
    public function boot()
    {
        //
        View::composer('web.*', function ($view) {
            $emailaddress = config::where('is_active', 1)->where('type', 'emailaddress')->first();
            $phonenumber = config::where('is_active', 1)->where('type', 'phonenumber')->first();
            $address = config::where('is_active', 1)->where('type', 'address')->first();
            $location = config::where('is_active', 1)->where('type', 'location')->first();


            $logo = logo::where('is_active', 1)->where('slug', 'logo')->orderBy('id', 'desc')->first();
            if ($logo) {
                $path = $logo->image;
            } else {
                $path = "web/images/logo.png";
            }

            $favicon = logo::where('slug', 'favicon')->where('is_active', 1)->where('is_deleted', 0)->orderBy('id', 'desc')->first();
            if ($favicon) {
                $favicon_path = $favicon->image;
            } else {
                $favicon_path = "web/images/logo.png";
            }

            $view->with('logo', $path);
            $view->with('favicon', $favicon_path);
            $view->with('emailaddress', $emailaddress);
            $view->with('address', $address);
            $view->with('phonenumber', $phonenumber);
            $view->with('location', $location);
        });
    }
}
