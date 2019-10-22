@extends('admin.navigator')

@section('content-admin')
<div class="uk-card">
    <div class="uk-alert-warning uk-alert" uk-alert="">
        <h4><span style="position: relative; bottom: 2px" uk-icon="plus-circle" class="uk-icon"></span>&nbsp; Grau</h4>
    </div>
    <hr class="uk-divider-small">

    <!-- Grau -->
    <form class="uk-grid-small" action="{{ route('grau.store') }}" method="POST" uk-grid>
        @csrf
        <div class="uk-width-1-1@s">
            <label class="uk-form-label">Grau de escolaridade</label>
            <input class="uk-input" type="text" name="grau" placeholder="Grau de escolaridade">
        </div>
        <div class="uk-width-1-1@s">
            <button class="btn btn-outline-success uk-align-right my-2 my-sm-0 uk-margin">Gravar</button>
        </div>

    </form>

    <hr>
    <!-- Curso -->
    <div class="uk-alert-warning uk-alert" uk-alert="">
        <h4><span style="position: relative; bottom: 2px" uk-icon="plus-circle" class="uk-icon"></span>&nbsp; Curso</h4>
    </div>
    <hr class="uk-divider-small">
    <form class="uk-grid-small" action="{{ route('cursos.store') }}" method="POST" enctype="multipart/form-data" uk-grid>
        @csrf
        <div class="uk-width-1-1">
            <label class="uk-form-label">Nome</label>
            <input class="uk-input" type="text" name="nome" placeholder="Nome do curso">
        </div>
        <div class="uk-width-1-1">
            <label class="uk-form-label">Ciclo de estudos</label>
                <textarea  autocomplete="false" class="uk-textarea" rows="10" type="text" name="ciclo" placeholder="Ciclo de estudos" id="ciclo_estudos"></textarea>
                <script>
                    ClassicEditor.create(document.querySelector('#ciclo_estudos'),{

                    })
                    .catch( error => {
                        console.error( error );
                        });
                </script>
        </div>
        <div class="uk-width-1-1">
            <label class="uk-form-label">Perfil de saída</label>
            <textarea autocomplete="false" class="uk-textarea" name="perfil_saida" rows="10" type="text" name="perfil_saida" id="perfil"
                placeholder="Objectivos e perfil de saída"></textarea>
                <script>
                    ClassicEditor.create(document.querySelector('#perfil'),{

                                    })
                                    .catch( error => {
                                        console.error( error );
                                        });
                </script>
        </div>
        <div class="uk-width-1-1">
            <label class="uk-form-label">Admissão ao curso</label>

                <textarea  autocomplete="false" class="uk-textarea" rows="10" type="text"
                    name="admissao" id="admissao" placeholder="Admissão ao curso"></textarea>
                <script>
                    ClassicEditor.create(document.querySelector('#admissao'),{

                    })
                    .catch( error => {
                        console.error( error );
                        });
                </script>
        </div>
        <div class="uk-width-1-1" id="dynamic_input">

            <div class="uk-width-1-1">
                <label id="variante-label" class="uk-form-label">Variante</label>
                <textarea  autocomplete="false" class="uk-textarea" rows="10" type="text" name="variantes" id="variantes"
                    placeholder="Descrição"></textarea>
                <script>
                    ClassicEditor.create(document.querySelector('#variantes'),{

                    })
                    .catch( error => {
                        console.error( error );
                        });
                </script>
            </div>
        </div>
        <div class="uk-width-1-2@s">
            <label class="uk-form-label">Grau</label>
            <select class="uk-select" name="grau_id">
                <option selected disabled>Seleccione o grau</option>
                @foreach ($graus as $grau)
                    <option value="{{ $grau->id }}">{{ $grau->grau }}</option>
                @endforeach
            </select>
        </div>
        <div class="uk-width-1-2@s" uk-form-custom="target: true">
            <label class="uk-form-label">O plano curricular do curso</label>
            <input type="file" name="plano_curicular">
            <input class="uk-input" type="text" placeholder="Clique ou arraste-o até aqui para seleccionar" disabled>
        </div>

        <div class="uk-width-1-2@s" uk-form-custom="target: true">
            <label class="uk-form-label">Imagem do curso</label>
            <input type="file" name="imagem">
            <input class="uk-input" type="text" placeholder="Clique ou arraste-a até aqui para seleccionar" disabled>

        </div>
        <div class="uk-width-1-2@s">
            <label class="uk-form-label">Regime</label>
            <select class="uk-select" name="regime">
                <option selected disabled>Seleccione o regime do curso</option>
                <option value="A Distância">A Distância</option>
                <option value="Laboral">Laboral</option>
                <option value="Pôs laboral">Pôs laboral</option>
            </select>
        </div>
        <div class="uk-width-1-1@s">
            <button class="btn btn-outline-success uk-align-right my-2 my-sm-0 uk-margin">Gravar</button>
        </div>
    </form>
</div>
</div>

<div class="uk-width-1-4@m">
    @foreach ($cursos as $curso)
    <div class="uk-card">
        <div class="uk-margin-small uk-margin-small-top uk-margin-small uk-padding-remove"
            style="border: 1px solid rgb(223, 223, 223); border-radius: 5px;">
                <div class="uk-card-body uk-padding-small uk-box-shadow-hover-large">
                    <h3 class="uk-text-bold uk-h4">{{ $curso->nome }}</h3>
                <p>{!! Str::limit($curso->ciclo, 100) !!}</p>

                <span class="uk-comment-meta uk-margin-remove-top">
                    <div class="uk-align-right uk-display-inline-block uk-margin-remove-top uk-margin-right"
                        style="margin-bottom: 5px !important">
                        <div class="uk-button-group">

                            <form action="{{ route('cursos.destroy', $curso->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <span style="text-transform: none;" class="uk-margin-small uk-text-danger"> <button
                                        uk-icon="trash"></button></span>
                            </form>
                        </div>

                        <span style="text-transform: none;" class="uk-margin-small uk-text-warning"><a href="{{ route('cursos.edit', $curso->id) }}"
                                uk-icon="file-edit"></a></span>
                    </div>
                </span>
            </div>
        </div>
    </div>
    @endforeach
</div>
@endsection