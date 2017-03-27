@extends('admin_template')
<?php
    View::share('page_title', 'Projetos');
?>
@section('content')
    <div class='row'>
      <div class="col-md-12 col-sm-6">
        @if($total < 15)
            <div class="info-box bg-yellow">

        @elseif($total < 7)
          <div class="info-box bg-yellow">
            @else
    <div class="info-box bg-aqua">
          @endif

          <span class="info-box-icon"><i class="fa fa-calendar"></i></span>

          <div class="info-box-content">
            <span class="info-box-text">Tempo do Projeto</span>
            <span class="info-box-number">Variavel com numero de dias</span>

            <div class="progress">
              <div class="progress-bar" style="width: 70%"></div>
            </div>
                <span class="progress-description">
                  Faltam: X dias para fim do projeto
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
                <img class="img-circle" src="../dist/img/user1-128x128.jpg" alt="User Image">
                <span class="username"><a href="#">Jonathan Burke Jr.</a></span>
                <span class="description">Shared publicly - 7:30 PM Today</span>
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
              <p>Far far away, behind the word mountains, far from the
                countries Vokalia and Consonantia, there live the blind
                texts. Separated they live in Bookmarksgrove right at</p>

              <p>the coast of the Semantics, a large language ocean.
                A small river named Duden flows by their place and supplies
                it with the necessary regelialia. It is a paradisematic
                country, in which roasted parts of sentences fly into
                your mouth.</p>
            </div>
            <!-- /.box-footer -->
          </div>
          <!-- /.box -->
        </div>



    </div><!-- /.row -->
@endsection
