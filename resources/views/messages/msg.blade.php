@if (count($errors) > 0)
@foreach ($errors->all() as $error)
<div class="text-danger">
    {{$error}}
</div>
@endforeach
@endif

@if (session('success'))
<div class="uk-text-success" role="alert">
    <div uk-alert class="uk-alert-success">
        <button class="uk-alert-close" type="button" uk-close></button>
        <p class="uk-alert-success">{{session('success')}}</p>
    </div>
</div>
@endif

@if (session('error'))
<div class="uk-text-danger" role="alert">
    <div uk-alert class="uk-text-danger">
        <button class="uk-alert-close" type="button" uk-close></button>
        <p class="uk-text-danger">{{session('error')}}</p>
    </div>
</div>
@endif