@extends('template.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <h2>{{__('New Posts')}}</h2>
            <form action="{{route('post.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="mb-3">
                    <label for="" class="form-label">標題</label>
                    <input type="text" name="title" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="">封面</label>
                    <input type="file" name="cover" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">文章分類</label>
                    <select name="category_id" id="" class="form-control">
                        @foreach($categories as $category)
                        <option value="{{$category->id}}">{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="content" class="form-label">內文</label>
                    <textarea name="content" id="content" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <input type="submit" value="新增" class="btn btn-primary">
                <input type="button" value="取消" onclick="history.back()" class="btn btn-danger">
            </form>
        </div>
    </div>
</div>

{{$errors}}

<script src="https://cdn.tiny.cloud/1/no-api-key/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
<script>
    tinymce.init({
        selector: '#content',
        language: 'zh_TW',
        height: '400px',
        toolbar: 'removeformat | image code link | styleselect bullist numlist | bold italic forecolor underline strikethrough |'+
        '|alignleft aligncenter alignright ',
        plugins: 'image code link lists imagetools ',
        // image_title: true,
        // automatic_uploads: true,
        // images_upload_url:'/upload',
        // file_picker_types: 'image',
        // file_picker_callback: function (cb, value, meta) {
        //     var input = document.createElement('input');
        //     input.setAttribute('type', 'file');
        //     input.setAttribute('accept', 'image/*');
        //     input.onchange = function () {
        //     var file = this.files[0];
        //     var reader = new FileReader();
        //     reader.onload = function () {
        //         var id = 'blobid' + (new Date()).getTime();
        //         var blobCache =  tinymce.activeEditor.editorUpload.blobCache;
        //         var base64 = reader.result.split(',')[1];
        //         var blobInfo = blobCache.create(id, file, base64);
        //         blobCache.add(blobInfo);
        //         cb(blobInfo.blobUri(), { title: file.name });
        //     };
        //     reader.readAsDataURL(file);
        //     };

        //     input.click();
        // },
    });
</script>
@endsection

