@extends('admin_template')
<?php
    View::share('page_title', 'Adicionar Membro');
?>
@section('content')



          <div class="box box-success">
            <div class="box-header with-border">
              <h3 class="box-title">Novo cadastro</h3>
              @if(Session::has('error'))
                <div class="alert alert-danger">{{ Session::get('error') }}</div>
              @endif
            </div>
      <div class="box-body">
        <form class="form-horizontal" role="form" method="post" action="{{ url('membro') }}">
          {{csrf_field()}}
            <div class="input-group">
              <span class="input-group-addon">Nome *:</span>
              <input type="text" class="form-control" name="name" id="name" placeholder="Nome">
            </div>

            <br>

            <div class="input-group has-feedback {{ $errors->has('email') ? ' has-error' : '' }}">
                  <span class="input-group-addon">Email *:</span>
                  <input type="email" class="form-control" name="email" placeholder="Email">
                  @if ($errors->has('email'))
                      <span class="help-block">
                      <strong>{{ $errors->first('email') }}</strong>
                      </span>
                  @endif
            </div>
              <br>


              <div class="input-group has-feedback {{ $errors->has('password') ? ' has-error' : '' }}">
                    <span class="input-group-addon">Senha *:</span>
                <input type="text" class="form-control" name = "password" id ="password" placeholder="Senha">
                @if ($errors->has('password'))
                    <span class="help-block">
                    <strong>{{ $errors->first('password') }}</strong>
                    </span>
                @endif
              </div>
<br>
                  <div class="input-group">
                    <label> Posição do membro: </label>
                    <div class="radio">
                      <label>
                        <input type="radio" name="type" id="optionsRadios1" value="1" checked>
                        Aluno
                      </label>
                    </div>
                    <div class="radio">
                      <label>
                        <input type="radio" name="type" id="optionsRadios2" value="2">
                        Professor
                      </label>
                    </div>
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
