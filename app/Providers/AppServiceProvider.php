<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Gioitinh,App\Muctieu,App\User;

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
        view()->composer(['public.module.doituong','public.module.dangkymoi'],function($view){
            $doituong = Gioitinh::all();
            $view->with('doituong',$doituong);
        });
        view()->composer('public.module.mucdich',function($view){
            $muctieu = Muctieu::all();
            $view->with('muctieu',$muctieu);
        });
        view()->composer('public.index',function($view){
            $user = User::simplePaginate(10);
            $view->with('user',$user);
        });
    }
}
