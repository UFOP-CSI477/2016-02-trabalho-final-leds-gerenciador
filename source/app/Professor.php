<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Professor extends Model
{

	protected $fillable = ['user_id', 'registro', 'departamento', 'area'];

	public function aluno_prof_projeto(){
		return $this->hasMany('App\Aluno_Prof_Projeto');
	}
	/*
	public function user(){
		return $this->hasOne('App\User');
	}
	*/
	public function user(){
		return $this->belongsTo('App\User');
	}
}
