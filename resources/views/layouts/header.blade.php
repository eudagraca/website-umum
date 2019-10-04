<!-- Main Navbar -->
<div uk-sticky="sel-target: .uk-navbar-container; cls-active: uk-navbar-sticky; bottom: #transparent-sticky-navbar">
    <nav class="uk-container uk-navbar">
        <div class="uk-navbar-left">
            <ul class="uk-navbar-nav">
                <li class="uk-active">
                    <a href="/"><strong>UMUM</strong></a>
                </li>
            </ul>
        </div>
        <div class="uk-navbar-right">
            <ul class="uk-navbar-nav uk-visible@s">
                <li class="uk-active">
                    <a href="#noticias-recentes">Blog</a>
                </li>
                <li class="uk-active">
                    <a href="#cursos">Cursos</a>
                </li>
                <li class="uk-active">
                    <a href="#contactos">Contacte-nos</a>
                </li>
                <li class="uk-active">
                    <a href="#">Sobre nós</a>
                </li>
                @guest
                <li class="uk-active" id="btn-login">
                    <a href="{{ route('login') }}"> <button class="btn btn-outline-danger my-2 my-sm-0" href="#"
                            tabindex="-1" aria-disabled="true">Login</button> </a>
                </li>

                @else

                <li class="uk-active">
                    <a href=""> <button class="btn btn-outline-danger my-2 my-sm-0" href="#" tabindex="-1"
                            aria-disabled="true">{{ Auth::user()->name }}</button> </a>
                    <div uk-dropdown="animation: uk-animation-slide-top-small; duration: 1000">
                        <ul class="uk-nav uk-dropdown-nav">
                            <li class="uk-nav-header"><a href="">Perfil</a></li>
                            <li class="uk-nav-divider"></li>
                            <li class="uk-nav-header"><a href="{{ __('sair') }}">Logout</a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST"
                                    style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
                @endguest
                <a href="#" class="uk-navbar-toggle uk-hidden@s" uk-navbar-toggle-icon uk-toggle="target: #sidenav"></a>
        </div>
    </nav>

    <div id="sidenav" uk-offcanvas="flip: true" class="uk-offcanvas">
        <div class="uk-offcanvas-bar">
            <ul class="uk-nav">
                <li class="uk-active">
                    <a href="#noticias-recentes">Blog</a>
                </li>
                <li class="uk-active">
                    <a href="#cursos">Cursos</a>
                </li>
                <li class="uk-active">
                    <a href="#contactos">Contacte-nos</a>
                </li>
                <li class="uk-active">
                    <a href="#">Sobre nós</a>
                </li>
                @guest
                <li class="uk-active" id="btn-login">
                    <a href="{{ route('login') }}"> <button class="btn btn-outline-danger my-2 my-sm-0" href="#"
                            tabindex="-1" aria-disabled="true">Login</button> </a>
                </li>
                @endguest
            </ul>
        </div>
    </div>

</div>