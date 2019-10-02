@extends('layouts.app')
@section('title')
UMUM
@endsection

@section('content')

@include('slide.slider')

@endsection

@section('body')

@include('layouts.missao')

@include('cursos.index')

@include('layouts.nossas-conquistas')

@include('news.index')
<a href=""
    class="uk-button uk-button-default uk-margin-bottom uk-margin-large-left uk-button-small uk-text-warning uk-border-rounded uk-text-small uk-text-light"><span
        uk-icon="triangle-right" style="position: relative; bottom: 1px" class="uk-icon"></span>Mais Notícias...</a>

@include('eventos.index')
<a href=""
    class="uk-button uk-button-default uk-margin-bottom uk-margin-large-left uk-button-small uk-text-warning uk-border-rounded uk-text-small uk-text-light"><span
        uk-icon="triangle-right" style="position: relative; bottom: 1px" class="uk-icon"></span>Mais Eventos...</a>
@endsection