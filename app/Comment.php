<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Comment extends Model
{
    //
    public function blogf()
    {
        return $this->belongsTo('App\Blog','blog');
    }
    public function userf()
    {
        
        return $this->belongsTo('App\User','user');
    }
}
