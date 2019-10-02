<div class="uk-text-justify uk-margin-remove-top" uk-grid>
    <div class="uk-width-expand@m">
        <div class="uk-card">
            <legend class="uk-margin uk-text-bold uk-h3">Grau </legend>

            <!-- Grau -->
            <form class="uk-grid-small" uk-grid>
                <div class="uk-width-1-1@s">
                    <label class="uk-form-label">Grau de escolaridade</label>
                    <input class="uk-input" type="text" name="grau_escolaridade" placeholder="Grau de escolaridade">
                </div>
                <div class="uk-width-1-1@s">
                    <button class="btn btn-outline-success uk-align-right my-2 my-sm-0 uk-margin">Gravar</button>
                </div>

            </form>

            <hr>
            <!-- Curso -->
            <legend class="uk-margin uk-text-bold uk-h3 uk-margin-remove-adjacent">Curso </legend>
            <form class="uk-grid-small" uk-grid>
                <div class="uk-width-1-1">
                    <label class="uk-form-label">Nome</label>
                    <input class="uk-input" type="text" placeholder="Nome do curso">
                </div>
                <div class="uk-width-1-2@s">
                    <label class="uk-form-label">Ciclo de estudos</label>
                    <input class="uk-input" type="text" name="ciclo_estudos" placeholder="Ciclo de estudos">
                </div>
                <div class="uk-width-1-2@s">
                    <label class="uk-form-label">Perfil de saída</label>
                    <input class="uk-input" type="text" name="perfil_saida" placeholder="Objectivos e perfil de saída">
                </div>
                <div class="uk-width-1-2@s">
                    <label class="uk-form-label">Admissão ao curso</label>
                    <input class="uk-input" type="text" name="admissao_curso" placeholder="Admissão ao curso">
                </div>
                <div class="uk-width-1-2@s">
                    <label class="uk-form-label">Grau</label>
                    <select class="uk-select">
                        <option selected disabled>Seleccione o grau</option>
                        <option>Option 01</option>
                        <option>Option 02</option>
                    </select>
                </div>
                <div class="uk-width-1-2@s" uk-form-custom="target: true">
                    <label class="uk-form-label">O plano curricular do curso</label>
                    <input type="file" name="plano_culicular">
                    <input class="uk-input" type="text" placeholder="Seleccione o plano curricular" disabled>
                </div>

                <div class="uk-width-1-2@s" uk-form-custom="target: true">
                    <label class="uk-form-label">Imagem do curso</label>
                    <input type="file" name="imagem">
                    <input class="uk-input" type="text" placeholder="Seleccione a imagem do curso" disabled>

                </div>
                <div class="uk-width-1-1@s">
                    <button class="btn btn-outline-success uk-align-right my-2 my-sm-0 uk-margin">Gravar</button>
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