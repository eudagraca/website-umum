<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <link href="https://fonts.googleapis.com/css?family=Montserrat&display=swap" rel="stylesheet">
        <title>@yield('title')</title>
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">
        <link rel="stylesheet" href="{{ asset('css/uikit.min.css') }}">
        <link rel="stylesheet" href="{{ asset('css/custom.css') }}">

        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
        <link href="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.css" rel="stylesheet">
        <script src="https://cdnjs.cloudflare.com/ajax/libs/summernote/0.8.12/summernote-lite.js"></script>
        <script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    </head>

    <body class="uk-background-default uk-padding-large">
        @yield('content')

        <script src="{{ asset('js/uikit.min.js') }}"></script>
        <script src="{{ asset('js/uikit-icons.min.js') }}"></script>
        <script src="{{ asset('js/customJS.js') }}"></script>
    </body>
</html>