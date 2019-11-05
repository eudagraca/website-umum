<div class="uk-container">
    <div class="cursos" id="cursos">
        <h1 class="uk-heading-small uk-heading-line uk-text-center"> <span
                class="uk-label uk-label-danger nossos-cursos uk-text-bold">Nossos
                Cursos</span>
        </h1>

        <ul class="uk-flex-center uk-subnav uk-subnav-pill cursos-list" uk-switcher="animation: uk-animation-fade">
            <li><a class="curso-item" href="#">Todos</a></li>
            <li><a class="curso-item" href="#">Licenciatura</a></li>
            <li><a class="curso-item" href="#">Mestrado</a></li>
        </ul>

        <!-- Todos cursos  -->
        <ul class="uk-switcher uk-margin">
            <div uk-slider="center: true">

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                    <ul class="uk-slider-items uk-child-width-1-3@s slider-cursos" uk-grid
                        uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 500; repeat: true">

                        @forelse ($cursos as $curso)

                        <li>
                            <div>

                                <div class="uk-card uk-card-default uk-card-body card-k uk-border-rounded uk-text-break uk-transition-toggle uk-padding-remove uk-box-shadow-hover-large uk-grid-collapse uk-grid "
                                    style="border: 1px solid rgb(231, 231, 231);">

                                    <div style="border-radius: 4px 0px 0px 4px !important"
                                        class="uk-card-media-top uk-cover-container uk-width-1-3  uk-margin-right">
                                        <div uk-cover="" class="uk-card-media-right uk-cover" style="width: 130px; height: 130px;">
                                            <img uk-img="" data-type="image" uk-cover="" src="storage/curso_images/{{$curso->imagem}}" class="uk-cover"
                                                style="width: 200px; height: 100%;">
                                            <canvas width="80" height="50"></canvas>
                                        </div>
                                    </div>

                                    <div class="uk-width-expand">
                                        <p class="uk-text-bold uk-margin-top uk-text-truncate uk-margin-right">
                                            {{ $curso->nome }}</p>
                                        <p>{!! Str::limit($curso->perfil_saida, 50) !!}</p>
                                        <span class="uk-comment-meta">

                                            <small class="uk-transition-fade uk-transition-slide-right-small uk-position-bottom-right"
                                                style="bottom: 10px; right: 10px"><span style="color: #e33530 !important;" uk-icon="arrow-right"
                                                    class="uk-icon">mais detalhes </span></small>
                                        </span>

                                        <a href="{{ route('cursos.show', $curso->id) }}"><span style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; z-index: 1;"
                                                class="linkSpanner"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>

                        @empty
                        <p class="uk-text-warning uk-text-center"> Não temos cursos</p>

                        @endforelse
                    </ul>

                    <a style="color: black; background: white;"
                        class="uk-position-center-left uk-button uk-position-small uk-hidden-hover" uk-slidenav-previous
                        uk-slider-item="previous"></a>
                    <a style="color: black; background: white"
                        class="uk-position-center-right uk-position-small uk-hidden-hover uk-button" uk-slidenav-next
                        uk-slider-item="next"></a>
                </div>
                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>
            </div>

            <!-- Licenciatura -->

            <div uk-slider="center: true">

                <p class="uk-text-warning uk-text-center uk-text-emphasis">As licenciaturas da universidade estão
                    organizadas num ciclo
                    de 3
                    anos académicos / seis
                    semestres.</p>

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                    <ul class="uk-slider-items uk-child-width-1-3@s slider-cursos" uk-grid
                        uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 500; repeat: true">

                        @forelse ($cursos as $curso)
                            @if($curso->grau->grau == "Licenciatura")
                            <li>
                               <div>

                                <div class="uk-card uk-card-default uk-card-body card-k uk-border-rounded uk-text-break uk-transition-toggle uk-padding-remove uk-box-shadow-hover-large uk-grid-collapse uk-grid "
                                    style="border: 1px solid rgb(231, 231, 231);">

                                    <div style="border-radius: 4px 0px 0px 4px !important"
                                        class="uk-card-media-top uk-cover-container uk-width-1-3  uk-margin-right">
                                        <div uk-cover="" class="uk-card-media-right uk-cover" style="width: 130px; height: 130px;">
                                            <img uk-img="" data-type="image" uk-cover="" src="storage/curso_images/{{$curso->imagem}}" class="uk-cover"
                                                style="width: 200px; height: 100%;">
                                            <canvas width="80" height="50"></canvas>
                                        </div>
                                    </div>

                                    <div class="uk-width-expand">
                                        <p class="uk-text-bold uk-margin-top uk-text-truncate uk-margin-right">
                                            {{ $curso->nome }}</p>
                                        <p>{!! Str::limit($curso->perfil_saida, 50) !!}</p>
                                        <span class="uk-comment-meta">

                                            <small class="uk-transition-fade uk-transition-slide-right-small uk-position-bottom-right"
                                                style="bottom: 10px; right: 10px"><span style="color: #e33530 !important;" uk-icon="arrow-right"
                                                    class="uk-icon">mais detalhes </span></small>
                                        </span>

                                        <a href="{{ route('cursos.show', $curso->id) }}"><span style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; z-index: 1;"
                                                class="linkSpanner"></span></a>
                                    </div>
                                </div>
                            </div>
                            </li>
                            @endif
                        @empty
                        <p class="uk-text-warning"> Não temos cursos</p>
                        @endforelse
                    </ul>

                    <a style="color: black; background: white;"
                        class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                        uk-slider-item="previous"></a>
                    <a style="color: black; background: white"
                        class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                        uk-slider-item="next"></a>

                </div>

                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

            </div>

            <!-- Mestrado -->

            <div uk-slider="center: true">

                <p class="uk-text-warning uk-text-center uk-text-emphasis">Os mestrados da universidade estão
                    organizados
                    num
                    ciclo de 2 anos académicos com 3 semestres lectivos e um para a
                    escrita da dissertação.</p>

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                    <ul class="uk-slider-items uk-child-width-1-3@s slider-cursos" uk-grid
                        uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 500; repeat: true">


                        @forelse ($cursos as $curso)
                        @if($curso->grau->grau == "Mestrado")
                        <li>
                            <div>

                                <div class="uk-card uk-card-default uk-card-body card-k uk-border-rounded uk-text-break uk-transition-toggle uk-padding-remove uk-box-shadow-hover-large uk-grid-collapse uk-grid "
                                    style="border: 1px solid rgb(231, 231, 231);">

                                    <div style="border-radius: 4px 0px 0px 4px !important"
                                        class="uk-card-media-top uk-cover-container uk-width-1-3  uk-margin-right">
                                        <div uk-cover="" class="uk-card-media-right uk-cover" style="width: 130px; height: 130px;">
                                            <img uk-img="" data-type="image" uk-cover="" src="storage/curso_images/{{$curso->imagem}}"
                                                class="uk-cover" style="width: 200px; height: 100%;">
                                            <canvas width="80" height="50"></canvas>
                                        </div>
                                    </div>

                                    <div class="uk-width-expand">
                                        <p class="uk-text-bold uk-margin-top uk-text-truncate uk-margin-right">
                                            {{ $curso->nome }}</p>
                                        <p>{!! Str::limit($curso->perfil_saida, 50) !!}</p>
                                        <span class="uk-comment-meta">

                                            <small class="uk-transition-fade uk-transition-slide-right-small uk-position-bottom-right"
                                                style="bottom: 10px; right: 10px"><span style="color: #e33530 !important;" uk-icon="arrow-right"
                                                    class="uk-icon">mais detalhes </span></small>
                                        </span>

                                        <a href="{{ route('cursos.show', $curso->id) }}"><span
                                                style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; z-index: 1;"
                                                class="linkSpanner"></span></a>
                                    </div>
                                </div>
                            </div>
                        </li>
                        @endif
                        @empty
                        <p class="uk-text-warning"> Não temos cursos</p>
                        @endforelse
                    </ul>

                    <a style="color: black; background: white;"
                        class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
                        uk-slider-item="previous"></a>
                    <a style="color: black; background: white"
                        class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
                        uk-slider-item="next"></a>

                </div>

                <ul class="uk-slider-nav uk-dotnav uk-flex-center uk-margin"></ul>

            </div>

    </div>
</div>