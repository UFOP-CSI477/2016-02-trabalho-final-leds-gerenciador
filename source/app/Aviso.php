<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aviso extends Model
{

	protected $fillable = ['user_id', 'titulo', 'descricao', 'fim'];

    public function user(){
			return $this->belongsTo('App\User');
	}
}
