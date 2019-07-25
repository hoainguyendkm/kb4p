<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Gioitinh,App\Muctieu,App\User,App\Honnhan,App\Hocvan,App\Diachi;

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
        view()->composer(['public.module.doituong'],function($view){
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
        view()->composer(['public.module.menu','auth.register','public.module.footer'],function($view){
            $muctieu = Muctieu::all();
            $gioitinh = Gioitinh::all();
            $honnhan = Honnhan::all();
            $view->with('muctieu',$muctieu)
                    ->with('gioitinh',$gioitinh)
                    ->with('honnhan',$honnhan);
        });
        view()->composer('auth.register',function($view){
            $hocvan = Hocvan::all();
            $diachi = Diachi::all();
            $view->with('hocvan',$hocvan)
                    ->with('diachi',$diachi);
        });
        view()->composer('public.module.dangkymoi',function($view){
            $n1= User::where('gioitinh_id',1)->get()->take(10);
            $n2= User::where('gioitinh_id',2)->get()->take(10);
            $n3= User::where('gioitinh_id',3)->get()->take(10);
            $n4= User::where('gioitinh_id',4)->get()->take(10);
            $view->with('n1',$n1)
                    ->with('n2',$n2)
                    ->with('n3',$n3)
                    ->with('n4',$n4);
        });
    }
}
