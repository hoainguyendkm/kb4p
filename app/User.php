<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    public function gioitinhs(){
        return $this->belongsTo('App\Gioitinh');
    }
    public function diachis(){
        return $this->belongsTo('App\Diachi');
    }
    public function hocvans(){
        return $this->belongsTo('App\Hocvan');
    }
    public function honnhans(){
        return $this->belongsTo('App\Honnhan');
    }
    public function muctieus(){
        return $this->belongsTo('App\Muctieu');
    }
}
