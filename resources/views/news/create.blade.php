@extends('admin.navigator')

@section('content-admin')
<div class="uk-text-justify uk-margin-remove-top" uk-grid>
        <div class="uk-width-expand@m">
                <textarea name="content" id="editor"></textarea>
                <script>
                        ClassicEditor.create( document.querySelector( '#editor' ) )
                .catch( error => {
                        console.error( error );
                });
                </script>
        </div>
        <div class="uk-width-1-3@m">

        </div>
</div>
@endsection