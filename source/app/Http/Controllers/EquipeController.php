<?php
namespace App\Http\Controllers;
use App\Professor;
use App\Aluno;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class EquipeController extends Controller
{

 public function __construct(){
     $this->middleware('auth');
 }

 public function index(){
    $alunos = Aluno::all();
    $professores = Professor::all();
    return view('membros.index')->with('alunos', $alunos)
    ->with('professores', $professores);
 }



}
