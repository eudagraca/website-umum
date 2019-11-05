@extends('admin.navigator')

@section('content-admin')

<div class="uk-text-justify uk-margin-remove-top" uk-grid>
    <div class="uk-width-expand@m">
        <div class="uk-card">


            <div class="uk-alert-warning uk-alert" uk-alert="">
                <h4><span style="position: relative; bottom: 2px" uk-icon="plus-circle" class="uk-icon"></span>&nbsp; Banners</h4>
            </div>
            <hr class="uk-divider-small">
            <form class="uk-grid-small" uk-grid action="{{route('banner.store')}}" method="POST"
                enctype="multipart/form-data">
                @csrf
                <div class="uk-width-1-1">
                    <label class="uk-form-label">Título</label>
                    <input class="uk-input" type="text" name="titulo" placeholder="Título" required>
                </div>
                <div class="uk-width-1-1">
                    <label class="uk-form-label">Descrição</label>
                    <textarea  autocomplete="false" class="uk-textarea" rows="10" type="text" name="descricao" placeholder="Descrição" id="descricao">{{ old('descricao', '') }}</textarea>
                <script>
                    ClassicEditor.create(document.querySelector('#descricao'),{

                    })
                    .catch( error => {
                        console.error( error );
                        });
                </script>
                </div>

                <div class="uk-width-1-1" uk-form-custom="target: true">
                    <label class="uk-form-label">Imagem do banner</label>
                    <input type="file" accept="image/jpeg,image/jpg,image/png" name="imagem" required>
                    <input class="uk-input" type="text" placeholder="Seleccione a imagem do curso" disabled>

                </div>
                <div class="uk-width-1-1@s">
                    <button type="submit"
                        class="btn btn-outline-success uk-align-right my-2 my-sm-0 uk-margin">Gravar</button>
                </div>
            </form>
        </div>
    </div>

    <div class="uk-width-1-4@m">
        @forelse ($banners as $banner)

        <div class="uk-card uk-card-default uk-card-body card-k uk-border-rounded uk-text-break uk-transition-toggle uk-padding-remove uk-grid-collapse uk-grid uk-margin-top"
            style="border: 1px solid rgb(223, 223, 223); border-radius: 5px;">

            <div style="border-radius: 4px 0px 0px 4px !important"
                class="uk-card-media-right uk-cover-container uk-width-1-5 uk-width-1-6@s uk-first-column uk-margin-right">
                <div uk-cover="" class="uk-cover" style="width: 130px; height: 130px;">
                    <img uk-img="" data-type="image" uk-cover="" src="../storage/banner_images/{{$banner->imagem}}"
                        class="uk-cover" style="width: 133px; height: 80px;">
                    <canvas width="50" height="50"></canvas>
                </div>
            </div>

            <div class="uk-width-expand">
                <input value="{{ $banner->id }}" name="banner_id" type="hidden">
                <p
                    class="uk-margin-right uk-margin-remove-left uk-margin-remove-bottom uk-margin-top uk-text-truncate uk-text-normal uk-text-bold">
                    {{ $banner->titulo }}</p>
                <p
                    class="uk-margin-small-right uk-margin-remove-left uk-margin-remove-bottom uk-margin-remove-top uk-text-truncate uk-text-small uk-text-light">
                    {!! Str::limit($banner->descricao, 80) !!}</p>
                <span class="uk-comment-meta uk-margin-remove-top">
                    <input name="status" id="status" class="uk-checkbox uk-text-warning" type="checkbox"
                        {{ $banner->status == 1? 'checked': '' }}><label class="uk-margin-left uk-text-small">Status</label><br>
                    <div class="uk-align-right uk-margin-remove-top uk-margin-right"
                        style="margin-bottom: 5px !important">
                        <div class="uk-button-group">

                        <form action="{{ route('banner.destroy', $banner->id)}}" method="POST">
                            @method('DELETE')
                            @csrf
                            <span style="text-transform: none;" class="uk-margin-small uk-text-danger"> <button
                                    uk-icon="trash"></button></span>
                        </form>
                        </div>

                        <span style="text-transform: none;" class="uk-margin-small uk-text-warning"><a
                                href="{{ route('banner.edit',$banner->id) }}" uk-icon="file-edit"></a></span>
                    </div>
                </span>
            </div>
        </div>
        @empty
        <p class="uk-text-warning uk-text-center">Nenhum banner adicionado</p>

        @endforelse
    </div>
</div>
<script type="text/javascript">
    $('#status').change(function() {
        if(this.checked) {
        var returnVal = confirm("Dejesa trocar o estado do banner?");
        $(this).prop("checked", returnVal);
        console.log(returnVal);
        }else{
            returnVal =false;
            console.log(returnVal);
        }

        var id = $("input[name='banner_id']").val();
        $.ajaxSetup({
        headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')        }
        });
        $.ajax({
            url: "{{ route('status-banner') }}",
            method: 'POST',
            data: {id: id, status: returnVal},
            success: function(data) {
                console.log(data);
            },error: function(data){
                console.log(data);
            }
        });

  });
</script>
@endsection