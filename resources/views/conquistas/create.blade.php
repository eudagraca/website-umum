@extends('admin.navigator')

@section('content-admin')
<div class="uk-text-justify uk-margin-remove-top" uk-grid>
    <div class="uk-width-expand@m">
        <div class="uk-card">

            <div class="uk-alert-warning uk-alert" uk-alert="">
                <h4><span style="position: relative; bottom: 2px" uk-icon="plus-circle" class="uk-icon"></span>&nbsp; Conquistas</h4>
            </div>
            <hr class="uk-divider-small">
            <form class="uk-grid-small" uk-grid action="{{route('conquistas.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="uk-width-1-1">
                    <label class="uk-form-label">Título</label>
                    <input class="uk-input" value="{{ old('titulo', '') }}" type="text" name="titulo" placeholder="Título" required>
                    @error('titulo')
                    <div class="uk-text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="uk-width-1-1">
                    <label class="uk-form-label">Descrição</label>
                    <input class="uk-input" type="text" name="descricao" placeholder="Descrição" value="{{ old('descricao', '') }}" required>
                    @error('descricao')
                    <div class="uk-text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="uk-width-1-1">
                    <label class="uk-form-label">Número de docentes</label>
                    <input class="uk-input" type="number" min="1" name="docentes" placeholder="Número total de docentes" value="{{ old('docentes', '') }}" required>
                    @error('docentes')
                    <div class="uk-text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="uk-width-1-1">
                    <label class="uk-form-label">Número de estudantes</label>
                    <input class="uk-input" type="number" min="1" name="estudantes" placeholder="Nḿero total de estudantes" value="{{ old('estudantes', '') }}" required>
                    @error('estudantes')
                    <div class="uk-text-danger">{{ $message }}</div>
                    @enderror
                </div>
                <div class="uk-width-1-1">
                    <label class="uk-form-label">Campus</label>
                    <input class="uk-input" type="number" min="1" name="campus" placeholder="Campus Universitário" value="{{ old('campus', '') }}" required>
                    @error('campus')
                    <div class="uk-text-danger">{{ $message }}</div>
                    @enderror
                </div>

                <div class="uk-width-1-1@s">
                    <button type="submit" class="btn btn-outline-success uk-align-right my-2 my-sm-0 uk-margin">Gravar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="uk-width-1-4@m">
        @forelse($conquistas as $conquista)
        <div class="uk-card">
            <div class="uk-margin-small uk-margin-small-top uk-margin-small uk-padding-remove"
                style="border: 1px solid rgb(223, 223, 223); border-radius: 5px;">
                <div class="uk-card-body uk-padding-small uk-box-shadow-hover-large">
                    <h3 class="uk-text-bold uk-h5 uk-text-truncate">{{ $conquista->titulo }}</h3>
                    <p>{!! $conquista->descricao !!}.</p>
                    <a href="url details"><span
                            style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; z-index: 1;"
                            class="linkSpanner"></span></a>

                    <span class="uk-comment-meta uk-margin-remove-top">
                        <div class="uk-align-right uk-display-inline-block uk-margin-remove-top uk-margin-right"
                            style="margin-bottom: 5px !important">
                            <div class="uk-button-group">

                                <form action="{{ route('conquistas.destroy', $conquista->id)}}" method="POST">
                                    @method('DELETE')
                                    @csrf
                                    <span style="text-transform: none;" class="uk-margin-small uk-text-danger"> <button
                                            uk-icon="trash"></button></span>
                                </form>
                            </div>

                            <span style="text-transform: none;" class="uk-margin-small uk-text-warning"><a
                                    href="{{ route('conquistas.edit', $conquista->id) }}" uk-icon="file-edit"></a></span>
                        </div>
                </div>
            </div>
            @empty
            <p class="uk-text-center uk-text-warning">Nenhuma conquista registada</p>

            @endforelse
    </div>
</div>
@endsection