@extends('admin.navigator')

@section('content-admin')
<div class="uk-text-justify uk-margin-remove-top" uk-grid>
    <div class="uk-width-expand@m">
        <div class="uk-card">
            <form action="{{ route('missao.store') }}" method="POST">
                @csrf
                <fieldset class="uk-fieldset uk-flex-center">
                        <div class="uk-alert-warning uk-alert" uk-alert="">
                            <h4><span style="position: relative; bottom: 2px" uk-icon="plus-circle" class="uk-icon"></span>&nbsp; Missão | Valores | Visão</h4>
                        </div>
                        <hr class="uk-divider-small">

                    <div class="uk-margin">
                        <label class="uk-form-label">Titulo</label>
                        <input required autocomplete="false" class="uk-input @error('titulo') uk-form-danger @enderror" value="{{ old('titulo', '') }}" name="titulo" type="text" placeholder="Missão | Valores | Visão">
                        @error('titulo')
                        <div class="uk-text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="uk-margin"">
                        <label class="uk-form-label">Descrição</label>
                        <textarea  autocomplete="false" class="uk-textarea @error('descricao') uk-form-danger @enderror" rows="7"
                            name="descricao" placeholder="Descrição" id="descricao">{{ old('descricao', '') }}</textarea>
                        <script>
                            ClassicEditor.create(document.querySelector('#descricao'),{
                                        })
                            .catch( error => {
                                console.error( error );
                            });
                        </script>
                    </div>

                    <div class="uk-width-1-1@s">
                        <button class="btn btn-outline-success uk-align-right my-2 my-sm-0 uk-margin">Gravar</button>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>

    <div class="uk-width-1-4@m">
        @foreach ($missoes as $missao)
            <div class="uk-card">
                <div class="uk-margin-small uk-margin-small-top uk-margin-small uk-padding-remove"
                    style="border: 1px solid rgb(223, 223, 223); border-radius: 5px;">
                <div class="uk-card-body uk-padding-small uk-box-shadow-hover-large">
                    <h3 class="uk-text-bold uk-h4">{{ $missao->titulo }}</h3>
                        <p class="uk-margin-remove">{!! Str::limit($missao->descricao, 50) !!}</p>

                        <span class="uk-comment-meta uk-margin-remove-top">
                            <div class="uk-align-right uk-display-inline-block uk-margin-remove-top uk-margin-right" style="margin-bottom: 5px !important">
                                <div class="uk-button-group">

                                <form action="{{ route('missao.destroy', $missao->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <span style="text-transform: none;" class="uk-margin-small uk-text-danger"> <button
                                            uk-icon="trash"></button></span>
                                </form>
                                </div>

                            <span style="text-transform: none;" class="uk-margin-small uk-text-warning"><a href="/missao/{{$missao->id}}/edit"
                                        uk-icon="file-edit"></a></span>
                            </div>
                        </span>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>
@endsection