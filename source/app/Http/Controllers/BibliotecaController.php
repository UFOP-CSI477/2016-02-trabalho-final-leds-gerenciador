<?php

namespace App\Http\Controllers;
use App\Aluguel;
use App\Livro;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class BibliotecaController extends Controller
{

 public function __construct(){
     $this->middleware('auth');
 }

 public function index(){
    $livros = Livro::all();

    return view('biblioteca.index')->with('livros', $livros);
 }

 public function alugar($id){
    $livro = Livro::find($id);
    $aluguelData = array('user_id' => Auth::user()->id, 'livro_id' => $livro->id, 'dataAlugado' => '2012/01/01');
    Aluguel::create($aluguelData);
        return redirect('/biblioteca');
 }

 public function devolver($id){
   Aluguel::where('livro_id', $id)->delete();
   return redirect('/biblioteca');
 }

}
