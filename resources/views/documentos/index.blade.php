@extends('layouts.app')
@section('title')
UMUM
@endsection

@section('body')

@include('layouts.lema')

<div class="uk-container">


    <h2 class="uk-heading-bullet uk-text-bold uk-text-muted uk-remove-margin">Documentos</h1>
        
    <div style="border: 2px solid orange;"
        class="uk-card uk-card-default uk-grid-collapse uk-padding-medium uk-margin-large-bottom@s uk-grid uk-grid-stack"
        uk-grid="">


        <div class="uk-background-cover uk-width-expand@m uk-first-column" style="background-color: white;">
            <div class="uk-card-body">
                <span style="text-transform: none;" class="uk-label uk-label-warning uk-margin-small"><small>hastag</small></span>

                <h3 class="uk-margin-remove-top uk-margin-remove-bottom uk-text-bold">Mobilidade Internacional</h3>
                <p class="uk-margin-remove-bottom">
                    Descricao da publicacao do documento
                </p>
                <div class="uk-overflow-auto uk-border-rounded uk-margin-small-top">
                    <table class="uk-table uk-table-middle uk-table-small uk-dark">
                        <thead>
                            <tr>
                                <th class="uk-text-left" style="color: #1f1f1f"><small>Anexo</small></th>
                                <th class="uk-width-small uk-text-right"
                                    style="color: #1f1f1f; position: relative; right: 6px"><small>Baixar</small></th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td class="uk-text-bold">Nome do documento
                                </td>
                                <td class="uk-text-right">
                                    <button class="btn btn-success uk-align-right my-2 my-sm-0 uk-margin">PDF <span uk-icon="cloud-download"></span></button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection