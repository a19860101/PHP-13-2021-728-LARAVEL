@extends('template.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <h2>編輯文章</h2>
            <form action="{{route('post.update',$post->id)}}" method="post">
                @csrf
                @method('put')
                <div class="mb-3">
                    <label for="" class="form-label">標題</label>
                    <input type="text" name="title" value="{{$post->title}}" class="form-control">
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">文章分類</label>
                    <select name="category_id" id="" class="form-control">
                        @foreach($categories as $category)
                        {{-- <option value="{{$category->id}}" @if($category->id == $post->category_id) selected @endif>{{$category->title}}</option> --}}
                        <option value="{{$category->id}}" {{$category->id == $post->category_id ? 'selected':'' }}>{{$category->title}}</option>
                        @endforeach
                    </select>
                </div>
                <div class="mb-3">
                    <label for="" class="form-label">內文</label>
                    <textarea name="content" id="" cols="30" rows="10" class="form-control">{{$post->content}}</textarea>
                </div>

                <input type="submit" value="儲存" class="btn btn-primary">
                <input type="button" value="取消" onclick="history.back()" class="btn btn-danger">
            </form>
        </div>
    </div>
</div>

@endsection
