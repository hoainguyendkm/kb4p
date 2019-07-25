<?php

namespace App\Http\Controllers\frontend;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User,App\Gioitinh,App\Muctieu,App\Honnhan;

class TimbanController extends Controller
{
    public function gioitinh($slug)
    {
        $gioitinh = Gioitinh::whereSlug($slug)->first();
        $user = User::where('gioitinh_id',$gioitinh->id)->simplePaginate(10);
        return view('public.gioitinh',compact('user'));
    }

    public function muctieu($slug)
    {
        $muctieu = Muctieu::whereSlug($slug)->first();
        $user = User::where('muctieu_id',$muctieu->id)->simplePaginate(10);
        return view('public.muctieu',compact('user'));
    }

    public function honnhan($slug)
    {
        $honnhan = Honnhan::whereSlug($slug)->first();
        $user = User::where('honnhan_id',$honnhan->id)->simplePaginate(10);
        return view('public.honnhan',compact('user'));
    }
}