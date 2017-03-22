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

        <!-- search form (Optional)
        <form action="#" method="get" class="sidebar-form">
            <div class="input-group">
                <input type="text" name="q" class="form-control" placeholder="Search..."/>
                <span class="input-group-btn">
                    <button type='submit' name='search' id='search-btn' class="btn btn-flat"><i class="fa fa-search"></i></button>
                </span>
            </div>
        </form>
        <!-- /.search form -->

        <!-- Sidebar Menu -->
        <ul class="sidebar-menu">
            <li class="header">Menu</li>
            <!-- Optionally, you can add icons to the links -->
            <li><a href="/"><i class="fa fa-newspaper-o"></i><span>Notícias</span></a></li>
            <li><a href="/perfil"><i class="fa fa-user"></i><span>Perfil</span></a></li>
            <li><a href="/"><i class="fa fa-users"></i><span>Membros</span></a></li>
            <li><a href="/projetos"><i class="fa fa-files-o"></i><span>Projetos</span></a></li>
            <li><a href="/"><i class="fa fa-book"></i><span>Biblioteca</span></a></li>
            <li><a href="/referencias"><i class="fa fa-github-alt"></i><span>GitHub</span></a></li>
            <li><a href="/"><i class="fa fa-institution"></i><span>Lattes</span></a></li>
            <li class="treeview">
                <a href="#"><i class="fa  fa-plus"></i><span>Adicionar</span>
                <span class="pull-right-container">
                    <i class="fa fa-angle-left pull-right"></i>
                </span>
                </a>
                <ul class="treeview-menu">
                    @if (Auth::user()->type > 1)
                      <li><a href="{{url('membro')}}"><i class="fa fa-circle-o"></i> Membro</a></li>
                      <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Projeto</a></li>
                    @endif
                    <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Livros</a></li>
                    <li><a href="../../index2.html"><i class="fa fa-circle-o"></i> Notícia</a></li>
                </ul>
            </li>
            <li><a href="{{ url('/test') }}"><span>Pagina teste</span></a></li>

        </ul><!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
</aside>
