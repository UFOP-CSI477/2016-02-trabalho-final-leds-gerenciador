<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluno_Prof_Projeto extends Model
{
    
    public function projeto(){
		return $this->hasMany('App\Projeto');
	}

    public function professor(){
    	return $this->belongsTo('App\Professor');
    }

    public function aluno(){
    	return $this->belongsTo('App\Aluno');
    }
}
