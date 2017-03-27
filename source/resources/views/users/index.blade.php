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
              <h3 class="box-title">Informações</h3>
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
                EM CONSTRUCAO ( O GRUPO AINDA NAO DECIDIU QUAL FUNCIONALIDADE ADICIONAR AQUI)
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
                          <
                          <option value="" disabled selected>Selecione uma opção</option>
                          <option @if(Auth::user()->aluno()->value('curso') == "Sistema de Informação")
                            selected
                            @endif value="Sistema de Informação">Sistema de Informação</option>
                          <option @if(Auth::user()->aluno()->value('curso') == "Engenharia Elétrica")
                            selected
                            @endif value="Engenharia Elétrica">Engenharia Elétrica</option>
                          <option @if(Auth::user()->aluno()->value('curso') == "Engenharia de Produção")
                            selected
                            @endif value="Engenharia de Produção">Engenharia de Produção</option>
                          <option @if(Auth::user()->aluno()->value('curso') == "Engenharia de Computação")
                            selected
                            @endif value="Engenharia de Computação">Engenharia de Computação</option>
                          <option @if(Auth::user()->aluno()->value('curso') == "Outro")
                            selected
                            @endif value="Outro">Outro</option>
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
                          <option @if(Auth::user()->professor()->value('departamento') == "DECEA")
                            selected
                            @endif value="DECEA">DECEA</option>
                          <option @if(Auth::user()->professor()->value('departamento') == "DECSI")
                            selected
                            @endif value="DECSI">DECSI</option>
                          <option @if(Auth::user()->professor()->value('departamento') == "DEENP")
                            selected
                            @endif value="DEENP">DEENP</option>
                          <option @if(Auth::user()->professor()->value('departamento') == "DEELT")
                            selected
                            @endif value="DEELT">DEELT</option>
                          <option @if(Auth::user()->professor()->value('departamento') == "Outro")
                            selected
                            @endif value="Outro">Outro</option>
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
                        <input type="text" class="form-control" value="{{$user->lattes}}" name="lattes" placeholder="http://..." />
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
