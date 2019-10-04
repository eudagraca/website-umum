<div class="uk-text-justify uk-margin-remove-top" uk-grid>
    <div class="uk-width-expand@m">
        <div class="uk-card">
            <form action="{{ route('missao.store') }}" method="POST">
                @csrf
                <fieldset class="uk-fieldset uk-flex-center">

                    <legend class="uk-margin uk-text-bold uk-h3 uk-margin-remove-adjacent">Missão |
                        Valores
                        | Visão </legend>

                    <div class="uk-margin">
                        <label class="uk-form-label">Titulo</label>
                        <input required autocomplete="false" class="uk-input @error('titulo') uk-form-danger @enderror" value="{{ old('titulo', '') }}" name="titulo" type="text" placeholder="Missão | Valores | Visão">
                        @error('titulo')
                        <div class="uk-text-danger">{{ $message }}</div>
                        @enderror
                    </div>

                    <div class="uk-margin">
                        <label class="uk-form-label">Descrição</label>
                        <textarea required autocomplete="false" class="uk-textarea @error('descricao') uk-form-danger @enderror" rows="7" name="descricao" placeholder="Descrição">{{ old('descricao', '') }}</textarea>
                        @error('descricao')
                        <div class="uk-text-danger">{{ $message }}</div>
                        @enderror
                    </div>
                    <div class="uk-width-1-1@s">
                        <button class="btn btn-outline-success uk-align-right my-2 my-sm-0 uk-margin">Gravar</button>
                    </div>

                </fieldset>
            </form>
        </div>
    </div>

    <div class="uk-width-1-3@m">
        <div class="uk-card">
            <div class="uk-margin-small uk-margin-small-top uk-margin-small uk-padding-remove"
                style="border: 1px solid #ffeff3; border-radius: 5px;">
                <div class="uk-card-body">
                    <h3 class="uk-card-title">Media Left</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt.</p>
                    <a href="url details"><span
                            style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; z-index: 1;"
                            class="linkSpanner"></span></a>
                </div>
            </div>
        </div>
    </div>
</div>