@extends('layouts.app')
@section('title')
UMUM
@endsection

@section('body')

@include('layouts.lema')
<div class="uk-section uk-margin-remove uk-padding-remove">

    <div>
        <div uk-grid class="uk-grid uk-margin-right uk-margin-left">
            <div class="uk-width-expand@m">
                <div style="background: rgb(255, 33, 74)"
                    class="uk-card uk-width-1-1 uk-align-center uk-card-primary uk-card-body" id="">
                    <h3 class="uk-heading-bulle-small uk-h3 uk-text-bold uk-text-muted">
                        {{ $curso->nome }}
                    </h3>

                </div>
                <div class="uk-container-small uk-margin-large-bottom uk-margin-remove-top">
                    <div>
                        <div class="uk-card uk-card-default uk-card-large uk-card-body uk-border-rounded uk-padding-large"
                            style="border: 1px solid rgb(255, 33, 74);">
                            <h1 class="uk-heading-line"> <span class="uk-label uk-label-success uk-text-bold">Ciclos de
                                    estudos</span></h1>
                            <div class="uk-text-justify">
                                <p class="uk-text-secondary">{!! $curso->ciclo !!}</p>
                            </div>

                            @if(!empty($curso->admissao))
                            <h1 class="uk-heading-line"> <span class="uk-label uk-label-success uk-text-bold">Admissão
                                    ao curso</span>
                            </h1>
                            <div class="uk-text-justify">
                                <p class="uk-text-secondary">{!! $curso->admissao !!}</p>
                            </div>
                            @endif

                            <h1 class="uk-heading-line"> <span class="uk-label uk-label-success uk-text-bold">Objectivos
                                    e perfil de
                                    saída</span>
                            </h1>
                            <div class="uk-text-justify">
                                <p class="uk-text-secondary uk-text-normal">
                                    {!! $curso->perfil_saida !!}</p>
                            </div>
                            <div class="uk-text-justify">
                                <p class="uk-text-secondary">
                                    {!! $curso->variante!!}</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="uk-width-1-4@m uk-margin-remove-left">

                <div class="uk-card">
                    <div class="uk-align-right uk-margin-remove-left"
                        style="border: 1px solid rgb(223, 223, 223); border-radius: 5px;">
                <div class="uk-card-body uk-padding-small uk-box-shadow-hover-large">
                    <h3 class="uk-text-bold uk-h4">
                            <h3 class="uk-text-truncate uk-margin-remove-top uk-text-muted uk-text-bold uk-h4">Plano de estudos</h3>
                            <div class="uk-divider-small uk-margin-remove-top"></div>
                            <p class="uk-text-bold">{{ $curso->nome }}</p>
                            <p class="uk-text-muted uk-margin-remove-top uk-margin-remove-bottom">{{ $curso->regime }}
                            </p>
                            <a href="url details"><span
                                    style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; z-index: 1;"
                                    class="linkSpanner"></span></a>

                            <a class="btn btn-danger uk-align-right my-2 my-sm-0 uk-margin-remove-top"
                                style="color:aliceblue;" download=""
                                href="{{Storage::url('/plano_curicular/'. $curso->plano_curicular)}}"
                                title="Baixar PDF">PDF <span uk-icon="cloud-download"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection