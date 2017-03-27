@extends('admin_template')
<?php
    View::share('page_title', 'Projetos');
?>
@section('content')
@foreach($dados as $index => $dado)

    <div class='row'>
      <div class="col-md-12 col-sm-6">
        @if($calculos[$index]['sobrando'] < 20 && $calculos[$index]['sobrando'] > 7)
            <div class="info-box bg-yellow">
        @elseif($calculos[$index]['sobrando'] < 7)
          <div class="info-box bg-red">
        @else
            <div class="info-box bg-aqua">
          @endif

          <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Tempo Total do Projeto</span>
            <span class="info-box-number">Dias: {{$calculos[$index]['total']}}</span>

            <div class="progress">
              <div class="progress-bar" style="width: {{$calculos[$index]['porcentagem']}}%"></div>
            </div>
                <span class="progress-description">
                  Faltam: {{$calculos[$index]['sobrando']}} dias para fim do projeto
                </span>
          </div>
          <!-- /.info-box-content -->
        </div>
        <!-- /.info-box -->
      </div>
    </div>
        <div class='row'>
        <div class="col-md-12">
          <!-- Box Comment -->
          <div class="box box-widget">
            <div class="box-header with-border">
              <div class="user-block">
                <span class="username">{{ $dado->nome }}</a></span>
                <span class="description">Data inicial: {{ $dado->inicio }}</span>
              </div>
              <!-- /.user-block -->
              <div class="box-tools">
                <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                </button>
              </div>
              <!-- /.box-tools -->
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <!-- post text -->
               <h3> Descricao do projeto: </h3>
              <b> Area do projeto: {{$dado->area}} </b>


              <p>Descricao: {{$dado->descricao}} </p>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>



    </div><!-- /.row -->
    @endforeach
@endsection
