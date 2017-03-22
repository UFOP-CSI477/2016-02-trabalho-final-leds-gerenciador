<?php

namespace App;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token',
    ];

    public function professor(){
        return $this->belongsTo('App\Professor');
    }

    public function aluno(){
        return $this->belongsTo('App\Aluno');
    }

    public function aviso(){
        return $this->belongsTo('App\Aviso');
    }
}
