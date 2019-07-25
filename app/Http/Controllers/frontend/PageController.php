<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;
use Carbon\Carbon;

class PageController extends Controller
{
    public function lienhe(){
        return view('public.lienhe');
    }
    public function gioithieu(){
        return view('public.gioithieu');
    }
    public function hotro(){
        return view('public.hotro');
    }

    public function thongtin($id,$slug){
    	$user = User::where('id',$id)->where('slug',$slug)->first();
    	$cungque = User::where('gioitinh_id',$user->gioitinh_id)->where('diachi_id',$user->diachi_id)->get();
    	return view('public.thongtinuser',compact('user','cungque'));
    }
}
