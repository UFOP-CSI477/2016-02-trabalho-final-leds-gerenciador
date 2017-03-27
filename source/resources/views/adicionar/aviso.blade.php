@extends('admin_template')
<?php
    View::share('page_title', 'Adicionar Aviso');
?>
@section('content')

          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Novo aviso</h3>
              @if(Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
              @endif
            </div>
      <div class="box-body">
        <form class="form-horizontal" role="form" method="post" action="{{ url('aviso') }}">
          {{csrf_field()}}
            <div class="input-group">
              <span class="input-group-addon">Titulo *:</span>
              <input type="text" class="form-control" name="titulo" id="titulo" placeholder="Titulo">
            </div>
            <br>

            <div class="input-group">
              <span class="input-group-addon">Descricao *:</span>
              <input type="text" class="form-control" name="descricao" id="descricao" placeholder="descricao">
            </div>
              <br>

      <br>
        <div class="input-group">
          <span class="input-group-addon">Data Final *:</span>
          <input type="date" class="form-control" name="fim" id="fim">
        </div>
        <br>
 <input type="hidden" name="user_id" value="{{Auth::user()->id}}">
              <div class="input-group input-group-sm">
                <button type="submit" class="btn btn-success btn-flat">Cadastrar</button>

              </div>
              <!-- /input-group -->
                      </form>
            </div>
            <!-- /.box-body -->
          </div>

@endsection
