<div class="uk-text-justify uk-margin-remove-top" uk-grid>
    <div class="uk-width-expand@m">
        <div class="uk-card">
          

            <legend class="uk-margin uk-text-bold uk-h3 uk-margin-remove-adjacent">Conquistas </legend>
            <form class="uk-grid-small" uk-grid action="{{route('conquistas.store')}}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="uk-width-1-1">
                    <label class="uk-form-label">Título</label>
                    <input class="uk-input" type="text" name="titulo" placeholder="Título" required>
                </div>
                <div class="uk-width-1-1">
                    <label class="uk-form-label">Descrição</label>
                    <input class="uk-input" type="text" name="descricao" placeholder="Descrição" required>
                </div>
                <div class="uk-width-1-1">
                    <label class="uk-form-label">Número de docentes</label>
                    <input class="uk-input" type="number" min="1" name="docentes" placeholder="Número total de docentes" required>
                </div>
                <div class="uk-width-1-1">
                    <label class="uk-form-label">Número de estudantes</label>
                    <input class="uk-input" type="number" min="1" name="estudantes" placeholder="Nḿero total de estudantes" required>
                </div>
                <div class="uk-width-1-1">
                    <label class="uk-form-label">Campus</label>
                    <input class="uk-input" type="number" min="1" name="campus" placeholder="Campus Universitário" required>
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