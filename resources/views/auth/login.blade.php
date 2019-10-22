@extends('layouts.app-no-header')

@section('content')
<div class="uk-container">
    <p class="uk-text-large uk-text-lighter uk-text-warning uk-align-center uk-text-center uk-margin uk-text-uppercase">Acesso restrito</p>

    <div class="row justify-content-center">
        <div class="uk-card uk-box-shadow-small uk-card-default uk-width-1-2@s">
            <div >
                <div class="uk-card-header"> <a class="uk-button-text uk-button uk-text-bold uk-text-capitalize" href="/"><span uk-icon="arrow-left"></span> {{ __('Página principal') }}</a></div>

                <div class="uk-card-body">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                            <label for="email" class="uk-form-label">{{ __('E-Mail') }}</label>
                            <div class="uk-margin-remove">
                                <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: user"></span>
                                <input id="email" type="email" class="uk-input @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                            <label for="password" class="uk-form-label">{{ __('Senha') }}</label>

                            <div class="uk-margin-remove">
                                <div class="uk-inline uk-width-1-1">
                                    <span class="uk-form-icon uk-form-icon-flip" uk-icon="icon: lock"></span>
                                    <input id="password" type="password" class="uk-input @error('password') is-invalid @enderror" name="password" required
                                        autocomplete="current-password">

                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>

                            </<div>

                            <div class="uk-align-left uk-margin-top">
                                <div class="uk-form-controls-text">
                                    <input class="uk-checkbox" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="uk-form-controls-text" for="remember">
                                        {{ __('Lembrar este usuário') }}
                                    </label>
                                </div>
                            </div>
                        {{-- </div> --}}

                        {{-- <div class="form-group row mb-0"> --}}
                            <div class="uk-width-1-1@s uk-grid-margin uk-align-left">
                                <button type="submit" class="btn uk-text-uppercase uk-width-1-3 btn-outline-dark">
                                    {{ __('Acessar') }}
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="btn uk-button-text uk-text-secondary uk-text-lowercase uk-button uk-margin-left uk-text-primary" href="{{ route('password.request') }}">
                                        {{ __('Esqueceu a senha?') }}
                                    </a>
                                @endif
                            </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
