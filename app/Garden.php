<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Garden extends Model
{
    protected $guarded = [];
    public $timestamps = false;

    public function promise(){
        return $this->hasMany('App\Promise');
    }
    public function impossible(){
        return $this->hasMany('App\Impossible');
    }
}
