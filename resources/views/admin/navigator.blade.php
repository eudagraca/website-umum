@extends('layouts.app')
@section('title')
UMUM
@endsection

@section('body')
@include('layouts.lema')
            <h3 class="uk-card-title uk-text-warning uk-margin-large-left uk-text-bolder uk-h2"><i style="position: relative; bottom: 2px" uk-icon="move" class="uk-icon uk-margin-auto-right"></i> Administração</h3>


<div class="uk-margin-large">
    <div uk-grid class="uk-grid uk-margin-right uk-margin-left">
        <div class="uk-width-auto@m">
            <ul class="uk-nav uk-nav-default">
                <li><a href="{{ route('banner.create') }}">BANNERS</a></li>
                <li><a href="{{ route('missao.create') }}">MISSÃO E VALORES</a></li>
                <li><a href="{{ route('contacto.create') }}">CONTACTOS</a></li>
                <li><a href="{{ route('cursos.create') }}">CURSOS DE GRAUS</a></li>
                <li><a href="#">ARTIGOS</a></li>
                <li><a href="{{ route('conquistas.create') }}">CONQUISTAS</a></li>
                <li><a href="{{ route('documentos.create') }}">DOCUMENTOS</a></li>
             {{-- Remover a opção de criar paginas  <li><a href="{{ route('pages.create') }}">PÁGINAS</a></li>
              --}}  <li><a href="{{ route('register') }}">USUÁRIO</a></li>

            </ul>
        </div>
        <div class="uk-width-expand@m">

            @include('messages.msg')


            @yield('content-admin')

        </div>
    </div>
</div>
@endsection