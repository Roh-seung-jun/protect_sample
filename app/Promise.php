<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Promise extends Model
{
    public $timestamps = false;
    protected $guarded = [];

    public function garden(){
        return $this->belongsTo('App\Garden');
    }

    public function review(){
        return $this->hasMany('App\Review');
    }
}
