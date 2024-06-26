<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;
    protected $keyType = 'string';
    protected $guarded = [];
    public $timestamps = false;

    public function garden(){
        return $this->hasOne('App\garden');
    }

    public function promises(){
        return $this->hasMany('App\Promise');
    }
}
