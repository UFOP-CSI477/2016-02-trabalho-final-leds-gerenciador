<!-- Left side column. contains the sidebar -->
<aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

        <!-- Sidebar user panel (optional) -->
        <div class="user-panel">
            <div class="pull-left image">
                <img src="/images/{{ Auth::user()->imagem }}" class="img-circle" alt="User Image" />
            </div>
            <div class="pull-left info">
                <p>{{ Auth::user()->name }}</p>
                <!-- Status -->
                <a href="#"><i class="fa fa-circle text-success"></i> Online</a>
            </div>
        </div>


        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="/noticias"><i class="fa fa-newspaper-o"></i><span>Notícias</span></a></li>
            <li><a href="/perfil"><i class="fa fa-user"></i><span>Perfil</span></a></li>
            <li><a href="/equipe"><i class="fa fa-users"></i><span>Membros</span></a></li>
            <li><a href="/projetos"><i class="fa fa-files-o"></i><span>Projetos</span></a></li>
            <li><a href="/biblioteca"><i class="fa fa-book"></i><span>Biblioteca</span></a></li>


<!-- Aqui basta colocar para recuperar o link do Lattes caso aluno ou caso professor -->
<!-- Se o lattes estiver vazio a gente pode desativar esse botao -->

            <li><a href=" @if(Auth::user()->type ==  2)

                {{ url(Auth::user()->lattes) }}
                @endif"
              ><i class="fa fa-institution"></i><span>Lattes</span></a></li>



            <li><a href="/referencias"><i class="fa fa-github-alt"></i><span>Referencias</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa  fa-plus"></i><span>Adicionar</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    @if (Auth::user()->type > 1)
                      <li><a href="{{url('membro/create')}}"><i class="fa fa-circle-o"></i> Membro</a></li>
                      <li><a href="{{url('projeto/create')}}"><i class="fa fa-circle-o"></i> Projeto</a></li>
                    @endif
                    <li><a href="{{url('livro/create')}}"><i class="fa fa-circle-o"></i> Livros</a></li>
                    <li><a href="{{url('aviso/create')}}"><i class="fa fa-circle-o"></i> Notícia</a></li>
                </ul>
            </li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
