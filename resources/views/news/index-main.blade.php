<div class="uk-padding-large-bottom" style="margin:0 5%; padding:1%">


    <div class="noticias-recentes" id="noticias-recentes">
        <h4 class="uk-heading-line uk-text-bold uk-margin-top"><span class="uk-label uk-label-default"
                style="font-size: 0.75rem; background-color: #55d58b"> #Noticias</span></h4>

        <div id="container-noticias" class="uk-grid-column-small uk-grid-row-large uk-child-width-1-2@s" uk-grid>
            <?php $n = 0  ?>
            @while ($n<3) <div>
                <div class="uk-card uk-card-default uk-card-body card-k uk-border-rounded uk-text-break uk-transition-toggle uk-padding-remove uk-grid-collapse uk-grid itens-shared"
                    style="border: 1px solid rgb(255, 33, 74);">

                    <div style="border-radius: 4px 0px 0px 4px !important"
                        class="uk-card-media-right uk-cover-container uk-width-1-4 uk-width-1-4@s  uk-margin-right">
                        <div uk-cover="" class="uk-cover" style="width: 130px; height: 130px;">
                            <img uk-img="" data-type="image" uk-cover="" src="storage/images/light.jpg" class="uk-cover"
                                style="width: 133px; height: 100%;">
                            <canvas width="50" height="50"></canvas>
                        </div>
                    </div>

                    <div class="uk-width-expand">
                        <p
                            class="uk-margin-remove-right uk-margin-remove-left uk-margin-remove-bottom uk-margin-top uk-text-truncate uk-text-lead">
                            Title</p>
                        <p class="uk-margin-remove uk-text-truncate uk-text-large uk-text-light">Info start</p>
                        <span class="uk-comment-meta uk-margin-remove-top">
                            <small>07 Jun, 2018 – 08:50</small><br>
                            <span style="text-transform: none;"
                                class="uk-label uk-label-danger uk-margin-small"><small>hastag</small></span>

                            <small class="uk-transition-fade uk-transition-slide-right-small uk-position-bottom-right"
                                style="bottom: 10px; right: 10px"><span style="color: #F90F47 !important;"
                                    uk-icon="arrow-right" class="uk-icon">Ler </span></small>
                        </span>

                        <a href="url details"><span
                                style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; z-index: 1;"
                                class="linkSpanner"></span></a>
                    </div>
                </div>
        </div>
        <?php $n++ ?>

        @endwhile
    </div>
</div>
</div>