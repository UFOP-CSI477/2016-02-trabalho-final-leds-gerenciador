<?php

namespace App\Http\Controllers;
use App\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;


class LivroController extends Controller
{

 public function __construct(){
     $this->middleware('auth');
 }
 public function index(){

    return view('adicionar.livro');
 }

 protected function validator(array $data)
 {
     return Validator::make($data, [
         'nome' => 'required',
         'numeroSerie' => 'required',

     ]);
 }

 /**
  * Create a new user instance after a valid registration.
  *
  * @param  array  $data
  * @return User
  */
  public function create()
  {
    return view('adicionar.livro');
  }


  public function store(Request $request)
  {
    $dados = ($request->all());
    if($dados['nome'] == '' || $dados['numeroSerie'] == ''){
         session()->flash('error', 'Favor preenxer todos os campos');
      return redirect('/livro/create');
    }
    Livro::create($dados);
    return redirect('/biblioteca');
  }

}
