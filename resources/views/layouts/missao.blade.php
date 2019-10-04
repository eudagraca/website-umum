<div class="missao visao uk-grid "
    uk-scrollspy="cls: uk-animation-slide-bottom; target: uk-card; delay: 100; repeat: true">
    <div class="uk-card uk-flex uk-card-default uk-border-rounded uk-grid-collapse uk-child-width-1-3@s uk-margin" uk-grid
        uk-scrollspy-class="uk-animation-slide-bottom">

        @foreach ($valores as $valor)
        <div class="uk-width-1-2">
            <div class="uk-card-body uk-text-justify uk-text-break">
                <h3 class="uk-card-title uk-text-bold">{{ $valor->titulo }}</h3>
                <p class="">{{ $valor->descricao }}</p>
            </div>
        </div>
        @endforeach
    </div>
</div>