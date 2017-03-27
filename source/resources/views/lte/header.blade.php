<!-- Main Header -->
<header class="main-header">

    <!-- Logo -->
    <a href="/" class="logo">
        <span class="logo-mini"><b>L</b>DS</span>
        <span class="logo-lg"><b>LEDS</b></span>
    </a>
    <!-- <img src="/images/leds.png" class="img-circle" width="50" height="50"/> -->

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
        <!-- Sidebar toggle button-->
        <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
            <span class="sr-only">Toggle navigation</span>
        </a>
        <!-- Navbar Right Menu -->
        <div class="navbar-custom-menu">
            <ul class="nav navbar-nav">
                <!-- Notifications Menu -->
                <li class="dropdown notifications-menu">
                    <!-- Menu toggle button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <i class="fa fa-bell-o"></i>

                    </a>
                    <ul class="dropdown-menu">

                        <li>
                            <!-- Inner Menu: contains the notifications -->

                        </li>
                        <li class="footer"><a href="/noticias">Ver noticias</a></li>
                    </ul>
                </li>
                <!-- Tasks Menu -->
                <!-- User Account Menu -->
                <li class="dropdown user user-menu">
                    <!-- Menu Toggle Button -->
                    <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                        <!-- The user image in the navbar-->
                        <img src="/images/{{ Auth::user()->imagem }}" class="user-image" alt="User Image"/>
                        <!-- hidden-xs hides the username on small devices so only the image appears. -->
                        <span class="hidden-xs">{{ Auth::user()->name }}</span>
                    </a>
                    <ul class="dropdown-menu">
                        <!-- The user image in the menu -->
                        <li class="user-header">
                            <img src="/images/{{ Auth::user()->imagem }}" class="img-circle" alt="User Image" />
                            <p>
                                {{ Auth::user()->name }} - @if(Auth::user()->type == 1) Aluno @else Professor @endif

                            </p>
                        </li>
                        <!-- Menu Body -->
                        <li class="user-body">
                            <div class="col-xs-4 text-center">
                                <a href="/perfil">Perfil</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="/biblioteca">Biblioteca</a>
                            </div>
                            <div class="col-xs-4 text-center">
                                <a href="/projetos">Projetos</a>
                            </div>
                        </li>
                        <!-- Menu Footer-->
                        <li class="user-footer">
                        
                            <div class="pull-right">
                                <a href="{{ route('logout') }}"
                                    onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
                                    class="btn btn-default btn-flat">
                                    Sign out
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    {{ csrf_field() }}
                                </form>
                            </div>
                        </li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>
</header>
