tinymce.init({
    selector: '#conteudoDoPost',
    convert_urls: false,
    statusbar: false,
    autoresize_overflow_padding: 50,
    min_height: 350,
    plugins: 'image code print preview fullpage  searchreplace autolink directionality      visualblocks visualchars fullscreen image link    table charmap hr pagebreak nonbreaking    toc insertdatetime advlist lists textcolor wordcount   imagetools    contextmenu colorpicker  textpattern media ',
    toolbar: 'formatselect | bold italic strikethrough forecolor backcolor | link |     alignleft aligncenter alignright alignjustify  | numlist bullist outdent indent  |  removeformat |undo redo | image code| link fontsizeselect  | ',

    images_upload_url: '{{url("/admin/upload")}}',

    // override default upload handler to simulate successful upload
    images_upload_handler: function (blobInfo, success, failure) {
        var xhr, formData;

        xhr = new XMLHttpRequest();
        xhr.withCredentials = false;
        xhr.open('POST', '{{url("/admin/upload")}}');
        if (xhr.status = 400) { err = "Invalid file name or Extension"; } else if (xhr.status = 500) { err = "Server Error"; } else if (xhr.status = 403) { err = "Origin Denied"; }
        xhr.onload = function () {
            var json;

            if (xhr.status != 200) {
                failure('HTTP Error: ' + xhr.status + ' ' + err);
                return;
            }

            json = JSON.parse(xhr.responseText);

            if (!json || typeof json.location != 'string') {
                failure('Invalid JSON: ' + xhr.responseText);
                return;
            }

            success(json.location);
        };

        formData = new FormData();
        formData.append('file', blobInfo.blob(), blobInfo.filename());

        xhr.send(formData);
    },
});