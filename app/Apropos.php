<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class apropos extends Model
{
    
    public function projets()
    {
        return $this->belongsTo('App\Projet', 'projet_id');
    }
    
    //
}
