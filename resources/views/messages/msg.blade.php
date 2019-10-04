@if (count($errors) > 0)
@foreach ($errors->all() as $error)
<div class="text-danger">
    {{$error}}
</div>
@endforeach
@endif

@if (session('success'))
<div class="uk-text-success" role="alert">
    <div uk-alert>
        <button class="uk-alert-close" type="button" uk-close></button>
        <p>{{session('success')}}</p>
    </div>
</div>
@endif

@if (session('error'))
<div class="uk-text-danger" role="alert">
    <div uk-alert>
        <button class="uk-alert-close" type="button" uk-close></button>
        <p>{{session('error')}}</p>
    </div>
</div>
@endif