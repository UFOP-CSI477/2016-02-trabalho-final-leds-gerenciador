@extends('admin_template')
<?php
    View::share('page_title', 'Adicionar Membro');
?>
@section('content')

<form class="form-horizontal" role="form" method="POST" action="{{ route('membro') }}">

          <div class="box box-info">
            <div class="box-header with-border">
              <h3 class="box-title">Novo cadastro</h3>
            </div>

            <div class="input-group">
              <span class="input-group-addon">Nome</span>
              <input type="text" class="form-control" placeholder="Nome">

            </div>
            <br>
            <div class="box-body">
              <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="text" class="form-control" placeholder="E-mail">
              </div>
              <br>


              <div class="input-group">
                <span class="input-group-addon">Senha</span>
                <input type="text" class="form-control" placeholder="E-mail">
              </div>

              <div class="form-group">
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios1" value="1" checked>
                        Aluno
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="optionsRadios" id="optionsRadios2" value="2">
                        Professor
                      </label>
                    </div>
              </div>

              <div class="input-group input-group-sm">
                <input type="text" class="form-control">
                    <span class="input-group-btn">
                      <button type="submit" class="btn btn-info btn-flat">Cadastrar</button>
                    </span>
              </div>
              <!-- /input-group -->
            </div>
            <!-- /.box-body -->
          </div>
        </form>
          <!-- /.box -->
@endsection
