<div class="uk-card uk-card-default" style="z-index: 980;" uk-sticky="bottom: #offset">
    <div class="uk-container-expand uk-box-shadow-medium" id="nav-wrapper">
        <nav class="uk-navbar-container" uk-navbar id="navbar">
            <div class="uk-navbar-right">
                <a class="uk-navbar-toggle" href="#" uk-toggle="target: #offcanvas-nav">
                    <span uk-navbar-toggle-icon></span> <span class="uk-margin-small-left"></span>
                </a>

                <a class="uk-navbar-item uk-logo uk-position-left" href="/"><img src="{{asset('img/logo.png')}}" alt="">LOGO</a>

            </div>
        </nav>

    </div>
</div>
<div class="uk-offcanvas-content">
    <div id="offcanvas-nav" uk-offcanvas="overlay: true">
        <div class="uk-offcanvas-bar">

            <ul class="uk-nav uk-nav-default">
                <li class="uk-active"><a href="/">UMUM</a></li>
                @guest
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
                <li class="uk-active">
                    <a href="http://moodle.umum.education/">EaD</a>
                </li>
                <li class="uk-active">
                    <a href="mailto:{{ $contactos['email'] }}">Webmail</a>
                </li>
                <li class="uk-active" id="btn-login">
                    <a href="{{ route('login') }}"> <button class="btn btn-outline-danger my-2 my-sm-0" href="#" tabindex="-1"
                            aria-disabled="true">Login</button> </a>
                </li>

                @else
                <li class="uk-active">
                    <a href="/adm">Painel de admnistrador</a>
                </li>

                <a class="uk-active">
                    <a href=""> <button class="btn btn-outline-danger my-2 my-sm-0" href="#" tabindex="-1"
                            aria-disabled="true">{{ Auth::user()->name }}</button> </a>
                    <div uk-dropdown="animation: uk-animation-slide-top-small; duration: 1000">
                        <ul class="uk-nav uk-dropdown-nav">
                            {{--  <a class="uk-nav-header"><a href="">Perfil</a></a>  --}}
                            <li class="uk-nav-divider"></li>
                            <li class="uk-nav-header"><a class="uk-text-uppercase" href="{{ route('logout') }}" uk-icon="sign-out" onclick="event.preventDefault();
                                 document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>
                                <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</div>