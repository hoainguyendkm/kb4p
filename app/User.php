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

    public function gioitinh(){
        return $this->belongsTo('App\Gioitinh');
    }
    public function diachi(){
        return $this->belongsTo('App\Diachi');
    }
    public function hocvan(){
        return $this->belongsTo('App\Hocvan');
    }
    public function honnhan(){
        return $this->belongsTo('App\Honnhan');
    }
    public function muctieu(){
        return $this->belongsTo('App\Muctieu');
    }
}
