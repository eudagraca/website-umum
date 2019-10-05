<div class="uk-text-justify uk-margin-remove-top" uk-grid>
    <div class="uk-width-expand@m">
        <div class="uk-card">
          

            <legend class="uk-margin uk-text-bold uk-h3 uk-margin-remove-adjacent">Banners </legend>
            <form class="uk-grid-small" uk-grid action="{{route('banner.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="uk-width-1-1">
                    <label class="uk-form-label">Título</label>
                    <input class="uk-input" type="text" name="titulo" placeholder="Título" required>
                </div>
                <div class="uk-width-1-1">
                    <label class="uk-form-label">Descrição</label>
                    <input class="uk-input" type="text" name="descricao" placeholder="Descrição" required>
                </div>
                
                <div class="uk-width-1-1" uk-form-custom="target: true">
                    <label class="uk-form-label">Imagem do banner</label>
                    <input type="file" name="imagem" required>
                    <input class="uk-input" type="text" placeholder="Seleccione a imagem do curso" disabled>

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