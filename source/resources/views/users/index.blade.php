@extends('admin_template')
<?php
    View::share('page_title', 'Perfil');
?>

@section('content')
    <div class='row'>

        <div class="col-md-3">

          <!-- Profile Image -->
          <div class="box box-primary">
            <div class="box-body box-profile">
              <img class="profile-user-img img-responsive img-circle" src="/images/{{ $user->imagem}}" alt="User profile picture">

              <h3 class="profile-username text-center">{{$user->name}}</h3>

              <p class="text-muted text-center"><?php if($user->type == 1){ ?> {{ $user->aluno()->value('curso') }} <?php }else{ ?> {{ $user->professor()->value('area') }} <?php } ?></p>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->

          <!-- About Me Box -->
          <div class="box box-primary">
            <div class="box-header with-border">
              <h3 class="box-title">About Me</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
              <strong><i class="fa fa-book margin-r-5"></i> Formação</strong>

              <p class="text-muted">
              {{$user->aluno()->value('curso')}}
              </p>

              @if($user->type != 1)
              <hr>

              <strong><i class="fa fa-book margin-r-5"></i> Departamento</strong>

              <p class="text-muted">{{$user->professor()->value('departamento')}}</p>

              @endif
              <hr>

              <strong><i class="fa fa-book margin-r-5"></i><a href= "{{$user->lattes}}"> Lattes</a></strong>

              <hr>

              <strong><i class="fa fa-map-marker margin-r-5"></i> Localização</strong>

              <p class="text-muted">LEDS, UFOP Campus ICEA</p>

              <hr>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
        <div class="col-md-9">
          @if (count($errors) > 0)
              <div class="alert alert-danger">
                  <ul>
                      @foreach ($errors->all() as $error)
                          <li>{{ $error }}</li>
                      @endforeach
                  </ul>
              </div>
          @endif
          <div class="nav-tabs-custom">
            <ul class="nav nav-tabs">
              <li class="active"><a href="#activity" data-toggle="tab" aria-expanded="true">Atividades</a></li>
              <li class=""><a href="#settings" data-toggle="tab" aria-expanded="false">Editar</a></li>
              <li class=""><a href="#password" data-toggle="tab" aria-expanded="false">Redefinir Senha</a></li>
            </ul>
            <div class="tab-content">
              <div class="tab-pane active" id="activity">
                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="../../dist/img/user1-128x128.jpg" alt="user image">
                        <span class="username">
                          <a href="#">Jonathan Burke Jr.</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Shared publicly - 7:30 PM today</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>
                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post clearfix">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="../../dist/img/user7-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Sarah Ross</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Sent you a message - 3 days ago</span>
                  </div>
                  <!-- /.user-block -->
                  <p>
                    Lorem ipsum represents a long-held tradition for designers,
                    typographers and the like. Some people hate it and argue for
                    its demise, but others ignore the hate as they create awesome
                    tools to help create filler text for everyone from bacon lovers
                    to Charlie Sheen fans.
                  </p>

                  <form class="form-horizontal">
                    <div class="form-group margin-bottom-none">
                      <div class="col-sm-9">
                        <input class="form-control input-sm" placeholder="Response">
                      </div>
                      <div class="col-sm-3">
                        <button type="submit" class="btn btn-danger pull-right btn-block btn-sm">Send</button>
                      </div>
                    </div>
                  </form>
                </div>
                <!-- /.post -->

                <!-- Post -->
                <div class="post">
                  <div class="user-block">
                    <img class="img-circle img-bordered-sm" src="../../dist/img/user6-128x128.jpg" alt="User Image">
                        <span class="username">
                          <a href="#">Adam Jones</a>
                          <a href="#" class="pull-right btn-box-tool"><i class="fa fa-times"></i></a>
                        </span>
                    <span class="description">Posted 5 photos - 5 days ago</span>
                  </div>
                  <!-- /.user-block -->
                  <div class="row margin-bottom">
                    <div class="col-sm-6">
                      <img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
                    </div>
                    <!-- /.col -->
                    <div class="col-sm-6">
                      <div class="row">
                        <div class="col-sm-6">
                          <img class="img-responsive" src="../../dist/img/photo2.png" alt="Photo">
                          <br>
                          <img class="img-responsive" src="../../dist/img/photo3.jpg" alt="Photo">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-6">
                          <img class="img-responsive" src="../../dist/img/photo4.jpg" alt="Photo">
                          <br>
                          <img class="img-responsive" src="../../dist/img/photo1.png" alt="Photo">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->
                    </div>
                    <!-- /.col -->
                  </div>
                  <!-- /.row -->

                  <ul class="list-inline">
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-share margin-r-5"></i> Share</a></li>
                    <li><a href="#" class="link-black text-sm"><i class="fa fa-thumbs-o-up margin-r-5"></i> Like</a>
                    </li>
                    <li class="pull-right">
                      <a href="#" class="link-black text-sm"><i class="fa fa-comments-o margin-r-5"></i> Comments
                        (5)</a></li>
                  </ul>

                  <input class="form-control input-sm" type="text" placeholder="Type a comment">
                </div>
                <!-- /.post -->
              </div>

              <!-- /.tab-pane -->

              <div class="tab-pane" id="settings">
                <form method="post" class="form-horizontal" @if($user->type == 1) action="/alunos/{{$user->aluno()->value('id')}}" @else action="/professors/{{$user->professor()->value('id')}}" @endif >
                  {{ method_field('PATCH') }}
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label for="name" class="col-sm-2 control-label">Name</label>

                    <div class="col-sm-10">
                      <input type="text" class="form-control" name="name" value="{{$user->name}}"/>
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="email" class="col-sm-2 control-label">Email</label>

                    <div class="col-sm-10">
                      <input type="email" class="form-control" name="email" value="{{$user->email}}"/>
                    </div>
                  </div>
                  @if($user->type == 1)
                    <div class="form-group">
                      <label for="matricula" class="col-sm-2 control-label">Matrícula</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="matricula" @if($user->aluno()->value('matricula') == $user->id) value="" @else value="{{$user->aluno()->value('matricula')}}" @endif />
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="curso" class="col-sm-2 control-label">Curso</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="curso">
                          <option value="" disabled selected>Select your option</option>
                          <option value="Sistema de Informação">Sistema de Informação</option>
                          <option value="Engenharia Elétrica">Engenharia Elétrica</option>
                          <option value="Engenharia de Produção">Engenharia de Produção</option>
                          <option value="Engenharia de Computação">Engenharia de Computação</option>
                          <option value="Outro">Outro</option>
                        </select>
                      </div>
                    </div>
                  @else
                    <div class="form-group">
                      <label for="registro" class="col-sm-2 control-label">Registro</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="registro" value="{{$user->professor()->value('registro')}}" />
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="departamento" class="col-sm-2 control-label">Departamento</label>
                      <div class="col-sm-10">
                        <select class="form-control" name="departamento">
                          <option value="" disabled selected>Select your option</option>
                          <option value="DECEA">DECEA</option>
                          <option value="DECSI">DECSI</option>
                          <option value="DEENP">DEENP</option>
                          <option value="DEELT">DEELT</option>
                          <option value="Outro">Outro</option>
                        </select>
                      </div>
                    </div>
                    <div class="form-group">
                      <label for="area" class="col-sm-2 control-label">Área</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="area" value="{{$user->professor()->value('area')}}" />
                      </div>
                    </div>
                  @endif
                  <div class="form-group">
                      <label for="lattes" class="col-sm-2 control-label">Lattes</label>

                      <div class="col-sm-10">
                        <input type="text" class="form-control" name="lattes" placeholder="http://..." />
                      </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>

              <div class="tab-pane" id="password">
                <form method="post" class="form-horizontal" @if($user->type == 1) action="/alunos/{{$user->aluno()->value('id')}}" @else action="/professors/{{$user->professor()->value('id')}}" @endif >
                  {{ method_field('PATCH') }}
                  {{ csrf_field() }}
                  <div class="form-group">
                    <label for="senha-old" class="col-sm-2 control-label">Senha</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="current-password" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="senha-new" class="col-sm-2 control-label">Nova Senha</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="password" />
                    </div>
                  </div>
                  <div class="form-group">
                    <label for="senha-new-rpt" class="col-sm-2 control-label">Repetir Senha</label>

                    <div class="col-sm-10">
                      <input type="password" class="form-control" name="password_confirmation" />
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="col-sm-offset-2 col-sm-10">
                      <button type="submit" class="btn btn-danger">Submit</button>
                    </div>
                  </div>
                </form>
              </div>
              <!-- /.tab-pane -->
            </div>
            <!-- /.tab-content -->
          </div>
          <!-- /.nav-tabs-custom -->
        </div>
        <!-- /.col -->



    </div><!-- /.row -->
@endsection
