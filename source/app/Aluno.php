<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno extends Model
{
    protected $fillable = ['matricula', 'curso'];

    public function aluno_prof_projeto(){
		return $this->hasMany('App\Aluno_Prof_Projeto');
	}

	public function user(){
		return $this->belongsTo('App\User');
	}
}
