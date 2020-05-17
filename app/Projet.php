<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class projet extends Model
{
    public function apropos()
    {
        return $this->hasOne('App\Apropos', 'id');
    }
    public function users()
    {
        return $this->belongsToMany('App\User')->using('App\SuivieModel');
    }
}
