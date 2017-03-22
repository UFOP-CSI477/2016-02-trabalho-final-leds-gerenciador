@extends('admin_template')
<?php
    View::share('page_title', 'Adicionar Membro');
?>
@section('content')

<form class="form-horizontal" role="form" method="POST" action="{{ url('membro') }}">

          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Novo cadastro</h3>
            </div>
      <div class="box-body">
            <div class="input-group">
              <span class="input-group-addon">Nome</span>
              <input type="text" class="form-control" placeholder="Nome">

            </div>

            <br>

              <div class="input-group">
                <span class="input-group-addon">@</span>
                <input type="text" class="form-control" placeholder="E-mail">
              </div>
              <br>


              <div class="input-group">
                <span class="input-group-addon">Senha</span>
                <input type="text" class="form-control" placeholder="E-mail">
              </div>


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
      <br>

              <div class="input-group input-group-sm">

              <button type="submit" class="btn btn-success btn-flat">Cadastrar</button>

              </div>
              <!-- /input-group -->
            </div>
            <!-- /.box-body -->
          </div>
        </form>
          <!-- /.box -->
@endsection
