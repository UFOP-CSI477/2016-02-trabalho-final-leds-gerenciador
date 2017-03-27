<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{

    protected $fillable = ['nome', 'descricao', 'area', 'inicio', 'fim'];

    public function aluno_prof_projeto(){
    	return $this->belongsTo('App\Aluno_Prof_Projeto');
    }
}
