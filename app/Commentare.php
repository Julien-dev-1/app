<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class commentare extends Model
{
    protected $fillable = [
        'user_id', 'projet_id','commentaires','path_commentaire_img','IsNew','lienNotification'
    ];
    public function users()
    {
        return $this->belongsTo('App\User', 'user_id');
    }
    public function reponsecommentaires()
    {
        return $this->belongsToMany('App\Commentare', 'id');
    }
}
