<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Projeto extends Model
{
    public function aluno_prof_projeto(){
    	return $this->belongsTo('App\Aluno_Prof_Projeto');
    }
}
