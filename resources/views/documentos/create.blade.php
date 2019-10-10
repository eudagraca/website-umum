<div class="uk-text-justify uk-margin-remove-top" uk-grid>
    <div class="uk-width-expand@m">
        <div class="uk-card">

            <legend class="uk-margin uk-text-bold uk-h3 uk-margin-remove-adjacent">Documento </legend>
        <form class="uk-grid-small" action="{{route('documentos.store')}}" method="POST" enctype="multipart/form-data" uk-grid>
            @csrf    
                <div class="uk-width-1-1">
                    <label class="uk-form-label">Documento referente a </label>
                    <input class="uk-input" name="referencia" type="text" placeholder="De que se trata?" required>
                </div>
                <div class="uk-width-1-2@s">
                    <label class="uk-form-label">Nome</label>
                    <input class="uk-input" type="text" name="nome" placeholder="Nome do documento" required>
                </div>
                <div class="uk-width-1-2@s">
                    <label class="uk-form-label">Descrição</label>
                    <input class="uk-input" type="text" name="descricao" placeholder="Descrição do documento">
                </div>
                <div class="uk-width-1-2@s">
                    <label class="uk-form-label">Palavra chave</label>
                    <input class="uk-input" type="text" name="tag" placeholder="Palavra chave">
                </div>
                <div class="uk-width-1-2@s" uk-form-custom="target: true">
                    <label class="uk-form-label">Documento</label>

                    <input type="file" name="ficheiro" required>
                    <input class="uk-input" type="text" placeholder="Seleccione o documento" disabled>

                </div>

                <div class="uk-width-1-1@s">
                    <button type="submit" class="btn btn-outline-success uk-align-right my-2 my-sm-0 uk-margin">Gravar</button>
                </div>
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
