<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{

	public function aluno_prof_projeto(){
		return $this->hasMany('App\Aluno_Prof_Projeto');
	}

	public function user(){
		return $this->hasOne('App\User');
	}
}
