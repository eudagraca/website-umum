@extends('admin.navigator')

@section('content-admin')
<div class="uk-card">
    <!-- Curso -->
    <div class="uk-alert-warning uk-alert" uk-alert="">
        <h4><span style="position: relative; bottom: 2px" uk-icon="plus-circle" class="uk-icon"></span>&nbsp; Página</h4>
    </div>
    <hr class="uk-divider-small">
    <form class="uk-grid-small" action="{{ route('pages.store') }}" method="POST" enctype="multipart/form-data" uk-grid>
        @csrf
        <div class="uk-width-1-1">
            <label class="uk-form-label">Titulo<span class="uk-text-danger uk-text-meta">
                (Obrigatório)</span></label>
            <input class="uk-input" type="text" name="titulo" placeholder="Titulo">
        </div>
        <div class="uk-width-1-1" id="dynamic_input">
            {{--  <label class="uk-form-label">Subtitulo do destaque<span class="uk-text-warning uk-text-meta">
                    (Opcional)</span></label>
            <input class="uk-input" type="text" name="subtitulo_destaque[]" placeholder="Subtitulo do destaque">  --}}

            <div class="uk-width-1-1">
                <label id="destaque-label" class="uk-form-label">Informação em destaque<span class="uk-text-warning uk-text-meta">
                        (Opcional)</span></label>
                <textarea class="uk-textarea" rows="5" type="text" name="destaques" placeholder="Descrição" id="editor-destaque"></textarea>
                <script>
                    ClassicEditor.create( document.querySelector('#editor-destaque') )
                                .catch( error => {
                                        console.error( error );
                                });
                </script>
                <div class="uk-width-1-1" uk-form-custom="target: true">
                    <label class="uk-form-label">Foto para destaque<span class="uk-text-warning uk-text-meta">
                            (Opcional)</span></label>
                    <input type="file" name="imagem_destaque" multiple="multiple">
                    <input class="uk-input" type="text" placeholder="Foto" disabled>

                </div>
                {{--  <label class="uk-form-label">Subtitulo do texto<span class="uk-text-warning uk-text-meta">
                        (Opcional)</span></label>
                <input class="uk-input" type="text" name="subtitulo_texto[]" placeholder="Subtitulo do texto">  --}}
                <label id="variante-label" class="uk-form-label">Texto<span class="uk-text-danger uk-text-meta">
                        (Obrigatório)</span></label>

                <textarea class="uk-textarea" rows="10" type="text" name="textos" placeholder="Descrição"
                    id="editor-textos"></textarea>
                <script>
                    ClassicEditor.create(document.querySelector('#editor-textos'),{

                    })
                    .catch( error => {
                        console.error( error );
                        });
                </script>
                <div class="uk-width-1-1" uk-form-custom="target: true">
                    <label class="uk-form-label">Foto para texto<span class="uk-text-warning uk-text-meta">
                            (Opcional)</span></label>
                    <input type="file" name="imagem_texto" multiple="multiple">
                    <input class="uk-input" type="text" placeholder="Foto" disabled>

                </div>
                {{--  <button type="button" name="add" id="add" class="btn btn-outline-primary uk-width-1-4 uk-margin-top uk-margin-bottom"><span class="uk-margin-small-right" uk-icon="plus"></span></button>  --}}
            </div>
        </div>

        <div class="uk-width-1-1@s">
            <button class="btn btn-outline-success uk-align-right my-2 my-sm-0 uk-margin">Gravar</button>
        </div>
    </form>
</div>
</div>

<div class="uk-width-1-4@m">
     @foreach ($pages as $page)
    <div class="uk-card">
        <div class="uk-margin-small uk-margin-small-top uk-margin-small uk-padding-remove"
            style="border: 1px solid rgb(223, 223, 223); border-radius: 5px;">
                <div class="uk-card-body uk-padding-small uk-box-shadow-hover-large">
                <h3 class="uk-h5 uk-text-bold uk-text-muted">{{ $page->titulo }}</h3>

                <span class="uk-comment-meta uk-margin-remove-top">
                    <div class="uk-align-right uk-margin-remove-top uk-margin-right" style="margin-bottom: 5px !important">
                        <div class="uk-button-group">
                        <form action="{{ route('cursos.destroy', $page->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <span style="text-transform: none;" class="uk-margin-small uk-text-danger"> <button uk-icon="trash"></button></span>

                        </form>
                        </div>

                        <span style="text-transform: none;" class="uk-margin-small uk-text-warning"><a
                                href="{{ route('banner.edit',$page->id) }}" uk-icon="file-edit"></a></span>
                    </div>
                </span>
            </div>
        </div>
    </div>
    @endforeach
</div>

{{--  <script>
    $(document).ready(function() {
        var i =1;

        $('#add').click(function(){
            i++;
            $('#dynamic_input').append(
                '<div id="row'+i+'" class="uk-width-1-1"><label class="uk-form-label">Subtitulo do destaque</label><input class="uk-input" type="text" name="subtitulo_destaque[]" placeholder="Subtitulo do destaque"><label id="destaque-label" class="uk-form-label">Informação em destaque</label><textarea class="uk-textarea" rows="5" type="text" name="destaques[]" placeholder="Descrição"></textarea> <div class="uk-width-1-1" uk-form-custom="target: true"> <label class="uk-form-label">Foto para destaque</span></label> <input type="file" name="imagem_destaque[]" multiple="multiple"> <input class="uk-input" type="text" placeholder="Foto" disabled> </div><label class="uk-form-label">Subtitulo do texto</label><input class="uk-input" type="text" name="subtitulo_texto[]" placeholder="Subtitulo do texto"><label class="uk-form-label">Texto</label></label> <textarea class="uk-textarea" rows="5" type="text" name="textos[]" placeholder="Descrição" id="editor-textos"></textarea><div class="uk-width-1-1" uk-form-custom="target: true"> <label class="uk-form-label">Foto para texto</label> <input type="file" name="imagem_texto[]" multiple="multiple"> <input class="uk-input" type="text" placeholder="Foto" disabled> </div> <button name="remove" id="'+i+'" class="btn btn-outline-danger btn_remove uk-width-1-4 uk-margin-top uk-margin-bottom"><span class="uk-margin-small-right" uk-icon="trash"></span></button> </div>'
            )
        });
        $(document).on('click', '.btn_remove', function(){
            var buttonId = $(this).attr("id");
            $('#row'+buttonId+'').remove();
        })

    })
</script>  --}}
@endsection