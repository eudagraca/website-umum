<div class="uk-position-relative uk-visible-toggle uk-light" tabindex="-1"
    uk-slideshow="animation: scale; ratio: 800:500; autoplay: true">

    <ul class="uk-slideshow-items">
        @foreach ($banners as $banner)
            <li>
            <img src="storage/banner_images/{{$banner->imagem}}" alt="" uk-cover>
            <div class="uk-overlay uk-overlay-primary uk-preserve-color uk-position-center uk-text-center uk-transition-slide-center">
                <h3 class="uk-margin-remove">{{$banner->titulo}}</h3>
                <p class="uk-margin-remove">{{$banner->descricao}}</p>
            </div>
        </li>
        @endforeach
    </ul>

    <a class="uk-position-center-left uk-position-small uk-hidden-hover" href="#" uk-slidenav-previous
        uk-slideshow-item="previous"></a>
    <a class="uk-position-center-right uk-position-small uk-hidden-hover" href="#" uk-slidenav-next
        uk-slideshow-item="next"></a>

</div>