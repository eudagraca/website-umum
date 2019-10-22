@extends('layouts.app')
@section('title')
UMUM
@endsection

@section('body')

@include('layouts.lema')

<section class="uk-padding-remove-top uk-section uk-section-small">
    <div class="uk-container uk-container-small">
        <h2 class="uk-heading-bullet uk-text-bold uk-h2 uk-margin-remove-adjacent uk-margin-remove-top">Documentos
        </h2>
        <div class="uk-divider-small"></div>
    </div>
</section>
<section class="uk-section uk-section-muted">

    <div class="uk-container">

        @foreach ($documentos as $item)
        <div style="border: 2px solid orange;"
            class="uk-card uk-margin-bottom uk-card-default uk-grid-collapse uk-padding-medium uk-margin-large-bottom@s uk-grid uk-grid-stack"
            uk-grid="">

            <div class="uk-background-cover uk-width-expand@m uk-first-column" style="background-color: white;">
                <div class="uk-card-body">
                    <span style="text-transform: none;"
                        class="uk-label uk-label-warning uk-margin-small"><small>{{$item->tag}}</small></span>

                    <h3 class="uk-margin-remove-top uk-margin-remove-bottom uk-text-bold"> {{$item->nome}}</h3>
                    <p class="uk-margin-remove-bottom">
                        {{$item->descricao}}
                    </p>
                    <div class="uk-overflow-auto uk-border-rounded uk-margin-small-top">
                        <table class="uk-table uk-table-middle uk-table-small uk-dark">
                            <thead>
                                <tr>
                                    <th class="uk-text-left" style="color: #1f1f1f"><small>Anexo</small></th>
                                    <th class="uk-width-small uk-text-right"
                                        style="color: #1f1f1f; position: relative; right: 6px"><small>Baixar</small>
                                    </th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="uk-text-bold">{{$item->nome}}
                                    </td>
                                    <td class="uk-text-right">
                                        <button class="btn btn-success uk-align-right my-2 my-sm-0 uk-margin"><a
                                                style="color:aliceblue;" download="{{$item->ficheiro}}"
                                                href="{{Storage::url('/documentos/'. $item->ficheiro)}}"
                                                title="{{$item->ficheiro}}">PDF <span
                                                    uk-icon="cloud-download"></span></a></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>


        </div>

        @endforeach

        {{$documentos->links()}}
    </div>
</section>
@endsection