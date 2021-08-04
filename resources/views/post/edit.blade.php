@extends('template.master')
@section('content')
    <h1>編輯</h1>
    <form action="{{route('post.update',$post->id)}}" method="post">
        @csrf
        @method('put')
        <div>
            <label for="">標題</label>
            <input type="text" name="title" value="{{$post->title}}">
        </div>
        <div>
            <label for="">內文</label>
            <textarea name="content" id="" cols="30" rows="10">{{$post->content}}</textarea>
        </div>

        <input type="submit" value="儲存">
        <input type="button" value="取消" onclick="history.back()">
    </form>
@endsection
