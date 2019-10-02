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

                        <?php $n=0 ?>
                        @while($n<6) <li>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top">
                                        <img src="https://getuikit.com/docs/images/light.jpg" alt="">
                                    </div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title">{{ $n }}</h3>
                                        <p class="uk-text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit,
                                            sed
                                            do
                                            eiusmod tempor incididunt.</p>
                                        <a style="color: rgb(235, 88, 88)" href="#"
                                            class="uk-button-text uk-flex-around" uk-icon="arrow-right">Read
                                            more</a>
                                    </div>
                                    <a href="url details"><span
                                            style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; z-index: 1;"
                                            class="linkSpanner"></span></a>
                                </div>
                            </div>
                            </li>
                            <?php $n++ ?>
                            @endwhile
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

            <!-- Licenciatura -->

            <div uk-slider="center: true">

                <p class="uk-text-warning uk-text-center uk-text-emphasis">As licenciaturas da universidade estão organizadas num ciclo
                    de 3
                    anos académicos / seis
                    semestres.</p>

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                    <ul class="uk-slider-items uk-child-width-1-3@s slider-cursos" uk-grid
                        uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 500; repeat: true">

                        <?php $n=0 ?>
                        @while($n<3) <li>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top">
                                        <img src="https://getuikit.com/docs/images/light.jpg" alt="">
                                    </div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title">{{ $n }}</h3>
                                        <p class="uk-text-justify">Lorem ipsum dolor sit amet, consectetur adipiscing
                                            elit,
                                            sed
                                            do
                                            eiusmod tempor incididunt.</p>
                                        <a style="color: rgb(235, 88, 88)" href="#"
                                            class="uk-button-text uk-flex-around" uk-icon="arrow-right">Read
                                            more</a>
                                    </div>
                                    <a href="url details"><span
                                            style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; z-index: 1;"
                                            class="linkSpanner"></span></a>
                                </div>
                            </div>
                            </li>
                            <?php $n++ ?>
                            @endwhile
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

                <p class="uk-text-warning uk-text-center uk-text-emphasis">Os mestrados da universidade estão organizados
                    num
                    ciclo de 2 anos académicos com 3 semestres lectivos e um para a
                    escrita da dissertação.</p>

                <div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1">

                    <ul class="uk-slider-items uk-child-width-1-3@s slider-cursos" uk-grid
                        uk-scrollspy="cls: uk-animation-fade; target: .uk-card; delay: 500; repeat: true">

                        <?php $n=0 ?>
                        @while($n<2) <li>
                            <div>
                                <div class="uk-card uk-card-default">
                                    <div class="uk-card-media-top">
                                        <img src="https://getuikit.com/docs/images/light.jpg" alt="">
                                    </div>
                                    <div class="uk-card-body">
                                        <h3 class="uk-card-title uk-text-truncate">{{ $n }}</h3>
                                        <p class="uk-text-justify uk-text-truncate">Lorem ipsum dolor sit amet,
                                            consectetur
                                            adipiscing elit,
                                            sed do
                                            eiusmod tempor incididunt.</p>
                                        <a style="color: rgb(235, 88, 88)" href="#"
                                            class="uk-button-text uk-flex-around" uk-icon="arrow-right">Read
                                            more</a>
                                    </div>
                                    <a href="url details"><span
                                            style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; z-index: 1;"
                                            class="linkSpanner"></span></a>
                                </div>
                            </div>
                            </li>
                            <?php $n++ ?>
                            @endwhile
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
