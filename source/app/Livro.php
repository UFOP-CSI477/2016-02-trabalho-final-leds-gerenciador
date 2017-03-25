<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Livro extends Model
{
  	protected $fillable = ['nome', 'numeroSerie'];

    public function aluguel(){
      return $this->hasOne('App\Aluguel');
  }
}
