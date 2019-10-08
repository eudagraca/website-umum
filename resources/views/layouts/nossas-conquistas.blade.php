<section class="uk-section uk-article uk-background-cover"
    style="background-image: url(https://www.upmaxixe.ac.mz/images/campus1_blured.png)">
    <div class="uk-container uk-container-small">
        @foreach ($conquista as $item)
        <h4 class="uk-text-bold uk-h3 uk-margin-remove-adjacent uk-text-center">{{$item->titulo}}</h4>
        <div class="uk-divider-small uk-text-center"></div>           
       
        <p class="uk-text-center">{{$item->descricao}}</p>

        <div class="uk-grid-small uk-child-width-expand@s uk-text-center uk-grid" uk-grid="">

            <div>
                <img src="images/icons/presentation.svg" width="60" height="60" uk-svg="" hidden="true">

                <h2 class="uk-margin-remove uk-text-bold">{{$item->docentes}}</h2>
                <small class="uk-margin-remove uk-text-muted">Docentes</small>
            </div>
            <div class="uk-divider-small uk-hidden@s"></div>
            <div>
                <img src="/images/icons/classroom.svg" width="60" height="60" uk-svg="" hidden="true">

                <h2 class="uk-margin-remove uk-text-bold">{{$item->estudantes}}</h2>
                <small class="uk-margin-remove uk-text-muted">Estudantes</small>
            </div>
            <div class="uk-divider-small uk-hidden@s"></div>
            <div>
                <img src="/images/icons/university.svg" width="60" height="60" uk-svg="" hidden="true">


                <h2 class="uk-margin-remove uk-text-bold">{{$item->campus}}</h2>
                <small class="uk-margin-remove uk-text-muted">Campus Universitário</small>
            </div>
        </div>
         @endforeach
    </div>
</section>