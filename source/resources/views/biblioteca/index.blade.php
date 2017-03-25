@extends('admin_template')
<?php
    View::share('page_title', 'Biblioteca');
?>
@section('content')

<div class="row">
  <div class="col-xs-12">
    <div class="box">
      <div class="box-header">
        <h3 class="box-title">Livros da Biblioteca Leds</h3>


      </div>
      <!-- /.box-header -->
      <div class="box-body table-responsive no-padding">
        <table class="table table-hover">
          <tr>
            <th>ID</th>
            <th>Nome</th>
            <th>Status</th>
            <th>Alugar</th>
          </tr>

            @foreach($livros as $livro)
              <tr>



              <td>{{$livro->id}}</td>
              <td>{{$livro->nome}}</td>
              <!--- FALTA VERIFICAR SE ESTA ALUGADO -->
                @if($livro->aluguel()->value("user_id"))
                <td><span class="label label-danger">Alugado</span></td>
                  @if($livro->aluguel()->value("user_id") == @Auth::user()->id)
                <td><a href= "{{ url('devolver/'. $livro->id) }} " class="btn btn-warning btn-flat">Devolver</a>
                  @else
                  <td>{{$livro->aluguel()->dataAlugado}}
                  @endif
              @else
              <td><span class="label label-success">Disponivel</span></td>
              <td>  <a href= "{{ url('alugar/'. $livro->id) }} " class="btn btn-success btn-flat">Alugar</a>
              @endif
                            </td>
    </tr>

            @endforeach

        </table>
      </div>
      <!-- /.box-body -->
    </div>
    <!-- /.box -->
  </div>
</div>
</section>
<!-- /.content -->
</div>
@endsection
