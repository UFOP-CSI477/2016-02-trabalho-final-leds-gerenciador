<?php

namespace App\Http\Controllers;
use App\User;
use App\Professor;
use App\Aluno;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class ProjetoController extends Controller
{
  /**
 * Create a new controller instance.
 *
 * @return void
 */
 public function __construct(){

     $this->middleware('auth');
 }

 public function index(){

     return view('adicionar.projeto');
 }
/**
 * Get a validator for an incoming registration request.
 *
 * @param  array  $data
 * @return \Illuminate\Contracts\Validation\Validator
 */
protected function validator(array $data)
{
    return Validator::make($data, [
        'name' => 'required|max:255',
        'email' => 'required|email|max:255|unique:users',
        'password' => 'required|min:6|confirmed',
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
    $professores = Professor::all();
    $alunos = Aluno::all();
    return view('adicionar.projeto')
    ->with("alunos", $alunos)
    ->with("professores",$professores);
 }


 public function store(Request $request)
 {
   $dados = ($request->all());

   if($dados['nome'] == '' || $dados['descricao'] == '' || $dados['inicio'] == '' || $dados['fim'] == ''){
        session()->flash('error', 'Favor preenxer todos os campos');
     return redirect('/projeto/create');
   }

   $new = User::create($dados);

   if($dados['type'] == 1){
    Aluno::create(array('user_id' => $new['id'], 'matricula' => $new['id'], 'curso' => 'Curso'));
   }else{
    Professor::create(array('user_id' => $new['id'], 'registro' => $new['id'], 'departamento' => 'departamento', 'area' => 'area'));
   }
   return redirect('/');
 }
}
