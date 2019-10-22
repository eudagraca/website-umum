@extends('admin.navigator')

@section('content-admin')
<div class="uk-text-justify uk-margin-remove-top" uk-grid>
    <div class="uk-width-expand@m">
        <div class="uk-card">

            <div class="uk-alert-warning uk-alert" uk-alert="">
                <h4><span style="position: relative; bottom: 2px" uk-icon="plus-circle" class="uk-icon"></span>&nbsp; Contacto</h4>
            </div>
            <hr class="uk-divider-small">
            <form class="uk-grid-small" action="{{route('contacto.store')}}" method="POST" uk-grid>
                @csrf
                <div class="uk-width-1-2@s">
                    <label class="uk-form-label">Telefone principal</label>
                    <input class="uk-input" name="celular" type="tel" placeholder="Telefone principal" required>
                </div>
                <div class="uk-width-1-2@s">
                    <label class="uk-form-label">Contacto do whatsapp</label>
                    <input class="uk-input" type="tel" name="whatsapp" placeholder="Telefone alternativo" required>
                </div>
                <div class="uk-width-1-2@s">
                    <label class="uk-form-label">Localização</label>
                    <textarea class="uk-textarea" rows="3" type="text" name="localizacao"
                        placeholder="Localização"></textarea>
                </div>
                <div class="uk-width-1-2@s">
                    <label class="uk-form-label">Correio eletrónico</label>
                    <input class="uk-input" type="email" name="email" placeholder="Correio eletrónico">
                </div>
                <div class="uk-width-1-1@s">
                    <button type="submit"
                        class="btn btn-outline-success uk-align-right my-2 my-sm-0 uk-margin">Gravar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="uk-width-1-4@m">
        @forelse ($contacts as $contact)

        <div class="uk-card">
            <div class="uk-margin-small uk-margin-small-top uk-margin-small uk-padding-remove"
                style="border: 1px solid rgb(223, 223, 223); border-radius: 5px;">
                    <div class="uk-card-body uk-padding-small uk-box-shadow-hover-large">
                        <h3 class="uk-text-bold uk-h5 uk-text-truncate">{{ $contact->email }}</h3>
                    <p>{{ $contact->celular }}</p>

                    <span class="uk-comment-meta uk-margin-remove-top">
                        <div class="uk-align-right uk-margin-remove-top uk-margin-right"
                            style="margin-bottom: 5px !important">
                            <div class="uk-button-group">
                            <form action="{{ route('contacto.destroy', $contact->id)}}" method="POST">
                                @method('DELETE')
                                @csrf
                                <span style="text-transform: none;" class="uk-margin-small uk-text-danger"> <button
                                        uk-icon="trash"></button></span>
                            </form>
                            </div>

                            <span style="text-transform: none;" class="uk-margin-small uk-text-warning"><a
                                    href="{{ route('contacto.edit', $contact->id) }}" uk-icon="file-edit"></a></span>
                        </div>
                    </span>
                </div>
            </div>
        </div>

        @empty

        <p class="uk-text-warning uk-text-center">Nenhum contacto registado</p>

        @endforelse
    </div>
</div>
@endsection