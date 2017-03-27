@extends('admin_template')
<?php
    View::share('page_title', 'Adicionar Projeto');
?>
@section('content')

          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Novo Projeto</h3>
              @if(Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
              @endif
            </div>
      <div class="box-body">
        <form class="form-horizontal" role="form" method="post" action="{{ url('projeto') }}">
          {{csrf_field()}}
            <div class="input-group">
              <span class="input-group-addon">Nome *:</span>
              <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon">Area *:</span>
              <input type="text" class="form-control" name="area" id="area" placeholder="are">
            </div>
            <br>
            <div class="input-group">
              <span class="input-group-addon">Descricao *:</span>
              <input type="text" class="form-control" name="descricao" id="descricao" placeholder="descricao">
            </div>
              <br>
              <label> Professores: </label>
              @foreach($professores as $professor)
              <input class="field" name="prof_list[]" type="checkbox" value="{{$professor->id}}">{{$professor->user()->value('name')}}
              @endforeach
              <br>
              <label> Alunos: </label>
              @foreach($alunos as $aluno)
              <input class="field" name="aluno_list[]" type="checkbox" value="{{$aluno->id}}">{{$aluno->user()->value('name')}}
              @endforeach



            <br>
      <div class="input-group">
        <span class="input-group-addon">Data Inicio *:</span>
        <input type="date" class="form-control" name="inicio" id="inicio" placeholder="Data Inicial">
      </div>

      <br>
      <div class="input-group">
        <span class="input-group-addon">Data Final *:</span>
        <input type="date" class="form-control" name="fim" id="fim" placeholder="Data Final">
      </div>
<br>
              <div class="input-group input-group-sm">
                <button type="submit" class="btn btn-success btn-flat">Cadastrar</button>

              </div>
              <!-- /input-group -->
                      </form>
            </div>
            <!-- /.box-body -->
          </div>

@endsection
