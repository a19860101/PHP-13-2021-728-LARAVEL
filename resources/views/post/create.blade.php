@extends('template.master')
@section('content')
    <h1>新增文章</h1>
    <form action="{{route('post.store')}}" method="post">
        @csrf
        <div>
            <label for="title">文章標題</label>
            <input type="text" name="title">
        </div>
        <div>
            <label for="content">內文</label>
            <textarea name="content" id="content" cols="30" rows="10"></textarea>
        </div>
        <input type="submit" value="新增">

    </form>
@endsection
@section('banner')
banner
@endsection
