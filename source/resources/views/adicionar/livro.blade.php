@extends('admin_template')
<?php
    View::share('page_title', 'Adicionar Livro');
?>
@section('content')



          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Novo Livro</h3>
              @if(Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
              @endif
            </div>
      <div class="box-body">
        <form class="form-horizontal" role="form" method="post" action="{{ url('livro') }}">
          {{csrf_field()}}
            <div class="input-group">
              <span class="input-group-addon">Nome *:</span>
              <input type="text" class="form-control" name="nome" id="nome" placeholder="Nome">
            </div>

            <br>
            <div class="input-group">
              <span class="input-group-addon">Numero Serie *:</span>
              <input type="text" class="form-control" name="numeroSerie" id="numeroSerie" placeholder="Numero Serie">
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
          <!-- jQuery 2.2.3 -->
          <script src="{{ asset ("/bower_components/admin-lte/plugins/jQuery/jQuery-2.2.3.min.js") }}"></script>
          <!-- Bootstrap 3.3.6 -->
          <script src="{{ asset ("/bower_components/admin-lte/bootstrap/js/bootstrap.min.js") }}"></script>
          <!-- iCheck -->
          <script src="{{ asset("/bower_components/admin-lte/plugins/iCheck/icheck.min.js") }}"></script>
          <script>
            $(function () {
              $('input').iCheck({
                checkboxClass: 'icheckbox_square-blue',
                radioClass: 'iradio_square-blue',
                increaseArea: '20%' // optional
              });
            });
          </script>
          <!-- /.box -->
@endsection
