@extends('layouts.app')
@section('title')
UMUM
@endsection

@section('content')

@include('slide.slider')

@endsection

@section('body')
<section class="uk-section uk-section-muted">
@include('missao.index')

@include('cursos.index')

@include('conquistas.index')

@include('news.index-main')
<a href="{{ route('noticias.index') }}" style="margin-bottom:3%!important"
    class="uk-button uk-button-default uk-margin-bottom uk-margin-large-left uk-button-small uk-text-warning uk-border-rounded uk-text-small uk-text-light"><span
        uk-icon="triangle-right" style="position: relative; bottom: 1px" class="uk-icon"></span>Mais Notícias...</a>
</section>
@endsection