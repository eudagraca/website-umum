@extends('admin.navigator')

@section('content-admin')
<div class="uk-text-justify uk-margin-remove-top" uk-grid>
    <div class="uk-width-expand@m">

        <div class="uk-card uk-box-shadow-small">
            <div class="card-body uk-padding-large">
                <div class="uk-title uk-h3 uk-text-bold uk-text-center uk-text-warning">{{ __('Registro de usuário') }}
                </div>
                <form method="POST" action="{{ route('register') }}">
                    @csrf

                    <div class="uk-margin">
                        <label for="name" class="uk-form-label">{{ __('Nome') }}</label>
                        <div class="uk-form-controls">
                            <input id="name" type="text" class="uk-input @error('name') is-invalid @enderror"
                                name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                            @error('name')
                            <span class="uk-text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="name" class="uk-form-label">{{ __('Email') }}</label>
                        <div class="uk-form-controls">
                            <input id="email" type="email" class="uk-input @error('email') is-invalid @enderror"
                                name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="uk-text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="permission" class="uk-form-label">{{ __('Nível de acesso') }}</label>
                        <div class="uk-form-controls">
                            <select name="permission"
                                class="custom-select uk-select @error('permission') is-invalid @enderror"
                                id="permission">
                                @if(old('permission'))
                                <option value="">Nível de acesso</option>
                                <option selected="old('permission')select" value="1">Administrador</option>
                                <option value="0">Escritor</option>
                                @else
                                <option value="" selected>Nível de acesso</option>
                                <option value="1">Administrador</option>
                                <option value="0">Escritor</option>
                                @endif
                            </select>
                            @error('permission')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="name" class="uk-form-label">{{ __('Senha') }}</label>
                        <div class="uk-form-controls">
                            <input id="password" type="password"
                                class="uk-input @error('password') is-invalid @enderror" name="password" required
                                autocomplete="new-password">

                            @error('password')
                            <span class="uk-text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="uk-margin">
                        <label for="password-confirm" class="uk-form-label">{{ __('Confirme a senha') }}</label>
                        <div class="uk-form-controls">
                            <input id="password-confirm" type="password" class="uk-input" name="password_confirmation"
                                required autocomplete="new-password">
                        </div>
                    </div>

                    <div class="uk-width-1-1">
                        <button type="submit" class="btn uk-text-uppercase uk-width-1-3 btn-outline-dark uk-width-1-6">
                            {{ __('Registar') }}
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <div class="uk-width-1-4@m">
    </div>
</div>
@endsection