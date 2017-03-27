<?php

namespace App\Http\Controllers;

use App\User;
use App\Professor;
use App\Aluno;
use App\Projeto;
use DateTime;
use App\Aluno_Prof_Projeto;
Use Carbon;
use DB;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class AlunoProfProjetoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

     public function __construct(){

         $this->middleware('auth');
     }

    public function index() {

      if(Auth::user()->type == 2){

         $projeto = Aluno_Prof_Projeto::where('professor_id', Auth::user()->professor()->value('id'))->value('projeto_id');

    }
    elseif(Auth::user()->type == 1){
         $projeto = Aluno_Prof_Projeto::where('aluno_id', Auth::user()->aluno()->value('id'))->value('projeto_id');
    }else{

    }

     $dados = Projeto::find($projeto);


     $fdate = $dados->inicio;
     $tdate = $dados->fim;
     $nowDate =  Carbon\Carbon::today()->format('Y-m-d');

     $datetime1 = new DateTime($fdate);
     $datetime3 = new DateTime($nowDate);
     $datetime2 = new DateTime($tdate);
     $interval = $datetime1->diff($datetime2);
     $intervalSobrando = $datetime3->diff($datetime2);
     $sobrando = $intervalSobrando->format('%a');
     $total = $interval->format('%a');

     $porcentagem = (100*($total - $sobrando))/$total;




          return view('projetos.index')
          ->with('total', $total)
          ->with('fdate',  $fdate )
          ->with('dados',  $dados )
          ->with('porcentagem', $porcentagem)
          ->with('sobrando', $sobrando)
          ->with('dados', $dados);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Aluno_Prof_Projeto  $aluno_Prof_Projeto
     * @return \Illuminate\Http\Response
     */
    public function show(Aluno_Prof_Projeto $aluno_Prof_Projeto)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Aluno_Prof_Projeto  $aluno_Prof_Projeto
     * @return \Illuminate\Http\Response
     */
    public function edit(Aluno_Prof_Projeto $aluno_Prof_Projeto)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Aluno_Prof_Projeto  $aluno_Prof_Projeto
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Aluno_Prof_Projeto $aluno_Prof_Projeto)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Aluno_Prof_Projeto  $aluno_Prof_Projeto
     * @return \Illuminate\Http\Response
     */
    public function destroy(Aluno_Prof_Projeto $aluno_Prof_Projeto)
    {
        //
    }
}
