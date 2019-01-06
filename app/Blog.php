<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    //
    public function commentMe()
    {
        return $this->hasMany('App\Comment','blog');
    }
    public function usrMe()
    {
        return $this->hasOne('App\User','id','user');
    }
}
