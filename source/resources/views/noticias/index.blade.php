@extends('admin_template')
<?php 
    View::share('page_title', 'Notícias'); 
?>
@section('content')
    <div class='row'>
        
        @foreach($avisos as $a)
          <div class="col-md-6">
            <!-- Box Comment -->
            <div class="box box-widget">
              <div class="box-header with-border">
                <div class="user-block">
                  <img class="img-circle" src="/images/{{$a->user()->value('imagem')}}" alt="User Image">
                  <span class="username"><a href="#">{{$a->titulo}}</a></span>
                  <span class="description">Postado por {{$a->user()->value('name')}} </span>
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
                {{$a->descricao}}
              </div>
              <!-- /.box-footer -->
            </div>
            <!-- /.box -->
          </div>
        @endforeach


    </div><!-- /.row -->
@endsection