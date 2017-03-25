<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Aluguel extends Model
{
  protected $fillable = ['user_id', 'livro_id', 'dataAlugado'];

  public function livro(){
    return $this->belongsTo('App\Livro');
  }

  public function user(){
    return $this->belongsTo('App\User');
  }
}
