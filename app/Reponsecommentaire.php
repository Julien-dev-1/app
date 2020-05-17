<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reponsecommentaire extends Model
{
    protected $fillable = [
        'commentaire_id', 'response','IsNew','user_id'
    ];
    public function commentares()
    {
        return $this->belongsTo('App\Commentare', 'commentaire_id');
    }
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
}
