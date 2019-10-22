@extends('admin.navigator')

@section('content-admin')
<div class="uk-text-justify uk-margin-remove-top" uk-grid>
    <div class="uk-width-expand@m">
        <div class="uk-card">

            <div class="uk-alert-warning uk-alert" uk-alert="">
                <h4><span style="position: relative; bottom: 2px" uk-icon="plus-circle" class="uk-icon"></span>&nbsp; Documento</h4>
            </div>
            <hr class="uk-divider-small">
            <form class="uk-grid-small" action="{{route('documentos.store')}}" method="POST"
                enctype="multipart/form-data" uk-grid>
                @csrf
                <div class="uk-width-1-2@s">
                    <label class="uk-form-label">Documento referente a </label>
                    <input class="uk-input" name="referencia" type="text" placeholder="De que se trata?" required>
                </div>
                <div class="uk-width-1-2@s">
                    <label class="uk-form-label">Nome</label>
                    <input class="uk-input" type="text" name="nome" placeholder="Nome do documento" required>
                </div>
                <div class="uk-width-1-1">
                    <label class="uk-form-label">Descrição</label>
                    <textarea class="uk-textarea" rows="3" type="text" name="descricao"
                        placeholder="Descrição do documento"></textarea>
                </div>
                <div class="uk-width-1-2@s">
                    <label class="uk-form-label">Palavra chave</label>
                    <input class="uk-input" type="text" name="tag" placeholder="Palavra chave">
                </div>
                <div class="uk-width-1-2@s" uk-form-custom="target: true">
                    <label class="uk-form-label">Documento</label>

                    <input type="file" name="ficheiro" required>
                    <input class="uk-input" type="text" placeholder="Clique ou arraste-o até aqui para seleccionar" disabled>

                </div>

                <div class="uk-width-1-1@s">
                    <button type="submit"
                        class="btn btn-outline-success uk-align-right my-2 my-sm-0 uk-margin">Gravar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="uk-width-1-4@m">
        @forelse ($documentos as $doc)

        <div class="uk-card">
            <div class="uk-margin-small uk-margin-small-top uk-margin-small uk-padding-remove"
                style="border: 1px solid rgb(223, 223, 223); border-radius: 5px;">
                <div class="uk-card-body uk-padding-small uk-box-shadow-hover-large">
                    <h3 class="uk-text-bold uk-h4">{{ $doc->nome }}</h3>
                    <p>{{ Str::limit($doc->descricao, 150) }}</p>

                    <span class="uk-comment-meta uk-margin-remove-top">
                        <div class="uk-align-right uk-margin-remove-top uk-margin-right"
                            style="margin-bottom: 5px !important">
                            <div class="uk-button-group">
                            <form action="{{ route('documento.destroy', $doc->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <span style="text-transform: none;" class="uk-margin-small uk-text-danger"> <button
                                        uk-icon="trash"></button></span>
                            </form>
                            </div>

                            <span style="text-transform: none;" class="uk-margin-small uk-text-warning"><a
                                    href="{{ route('documentos.edit', $doc->id) }}" uk-icon="file-edit"></a></span>
                        </div>
                    </span>
                </div>
            </div>
        </div>

        @empty

        <p class="uk-text-warning uk-text-center">Nenhum documento registado</p>

        @endforelse
    </div>
</div>
@endsection