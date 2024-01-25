<?php

namespace App\Providers;

use App\Helpers\Helper;
use App\Models\attributes;
use App\Models\logo;
use App\Models\role_assign;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;

class ViewServiceProvidervider extends ServiceProvider
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
        View::composer('layouts.links', function ($view) {
            $favicon = logo::where('is_active',1)->where('slug','favicon')->orderBy('id','desc')->first();
            if ($favicon) {
                $path = $favicon->image;
            } else{
                $path = "web/images/logo.png";
            }
            $view->with('favicon',$path);
        });
        View::composer('layouts.popup', function ($view) {
            $view->with('project_open',attributes::where('attribute', 'project')->where('is_active', 1)->get());
        });
        View::composer('layouts.sidebar', function ($view) {
            $user = Auth::user();
            $role_assign = role_assign::where('is_active' ,1)->where("role_id" ,$user->role_id)->orderBy('id','desc')->first();
            if ($role_assign && $role_assign->assignee!='N;') {
                $sidebar_data = unserialize($role_assign->assignee);
                $sidebar_data = Helper::create_sidebar($sidebar_data);
            }else{
                $sidebar_data = [];
            }
            $view->with('sidebar_data',$sidebar_data);
        });
    }
}
