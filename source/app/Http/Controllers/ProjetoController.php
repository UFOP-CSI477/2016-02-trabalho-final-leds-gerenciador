<?php

namespace App\Http\Controllers;
use App\User;
use App\Professor;
use App\Aluno;
use App\Projeto;
use App\Aluno_Prof_Projeto;
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

   if($dados['nome'] == '' || $dados['descricao'] == '' || $dados['inicio'] == '' || $dados['fim'] == '' || $dados['area'] == ''){
        session()->flash('error', 'Favor preenxer todos os campos');
     return redirect('/projeto/create');
   }
   $new = Projeto::create(array('nome' => $dados['nome'] , 'imagem' => 'teste', 'descricao'  => $dados['descricao'], 'area'  => $dados['area'] , 'inicio'  => $dados['inicio'],'fim'  => $dados['fim']));

   if(!empty($_POST['prof_list'])){
     foreach($_POST['prof_list'] as $prof) {
       foreach($_POST['aluno_list'] as $aluno){
       Aluno_Prof_Projeto::create(array('projeto_id'  => $new['id'], 'aluno_id'  => $aluno , 'professor_id'  => $prof));
}
     }
 }


   return redirect('/projetos');
 }
}
