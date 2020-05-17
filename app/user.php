<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use App\SuivieModels;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'firstname','email', 'password','jeutons'
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

    public function projets(){
        return $this->belongsToMany('App\projet','suivie_models', 'user_id', 'projet_id');
    }
    public function commentares()
    {
        return $this->hasOne('App\Commentare', 'id');
    }
    public function reponsecommentaires()
    {
        return $this->belongsToMany('App\Commentare', 'id');
    }
}
