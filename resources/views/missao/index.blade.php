<div class="missao visao uk-grid "
    uk-scrollspy="cls: uk-animation-slide-bottom; target: uk-card; delay: 100; repeat: true">
    <div class="uk-card uk-flex uk-card-default uk-border-rounded uk-grid-collapse uk-child-width-1-3@s uk-margin uk-box-shadow-hover-large" uk-grid
        uk-scrollspy-class="uk-animation-slide-bottom">

        @foreach ($valores as $valor)
        <div class="uk-width-1-3@s">
            <div class="uk-card-body uk-text-justify uk-text-break">
                <h3 class="uk-card-title uk-text-bold uk-text-muted">{{ $valor->titulo }}</h3>
                <p class="uk-text-secondary">{{ Str::limit($valor->descricao, 150)}}</p>
            </div>
            <a href="/missao"><span style="position: absolute; width: 100%; height: 100%; top: 0; left: 0; z-index: 1;"
                    class="linkSpanner"></span></a>
        </div>
        @endforeach
    </div>
</div>