@extends('layouts.app')
@section('title')
UMUM
@endsection

@section('body')

@include('layouts.lema')
<section class="uk-padding-remove-top uk-section uk-section-small">
    <div class="uk-container uk-container-small">
        <h2 class="uk-heading-bullet uk-text-bold uk-h2 uk-margin-remove-adjacent uk-margin-remove-top">Missão | Valores | Visão
        </h2>
        <div class="uk-divider-small"></div>
    </div>
</section>
<section class="uk-section uk-section-muted">
    <!-- posts -->
    <div class="uk-container uk-container-small uk-margin-medium">

        @forelse ($contents as $content)
        <div class="uk-card uk-card-body uk-margin-large-left uk-open uk-placeholder">
            <div class="uk-accordion-content uk-text-justify uk-margin-remove" aria-hidden="false">

                <h4 class="uk-text-justify uk-heading-bullet uk-text-bold uk-text-capitalize">{{ $content->titulo }}</h4>

                <p>
                    {!! $content->descricao !!}
                </p>

        </div>

        @empty
        <h2 class="uk-h3 uk-text-muted uk-text-bolder">Página inexistente</h2>

        @endforelse
    </div>


    <!-- /events -->
</section>

@endsection