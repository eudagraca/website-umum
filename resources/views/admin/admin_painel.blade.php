@extends('layouts.app')
@section('title')
UMUM
@endsection

@section('body')
@include('layouts.lema')

<div class="uk-margin-large">
    <div uk-grid class="uk-grid uk-margin-right uk-margin-left">
        <div class="uk-width-auto@m">
            <ul class="uk-tab-left" uk-tab="connect: #component-tab-left; animation: uk-animation-fade">
                <li><a href="#">Missao e valores</a></li>
                <li><a href="#">Cursos de Graus</a></li>
                <li><a href="#">Artigos</a></li>
                <li><a href="#">Documentos</a></li>
                <li><a href="#">Usuario</a></li>

            </ul>
        </div>
        <div class="uk-width-expand@m">
            <ul id="component-tab-left" class="uk-switcher">
                @include('admin.missao_valores')
                @include('admin.cursos')
                @include('news.index')
                @include('documentos.create')
                @include('auth.register')
            </ul>
        </div>
    </div>
</div>
@endsection