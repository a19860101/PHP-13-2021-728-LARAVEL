@extends('template.master')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-6">
            <h2>{{$post->title}}</h2>
            <div>
                {{$post->content}}
            </div>
            <div>最後更新時間{{$post->updated_at}}</div>
            <a href="{{route('post.edit',['post' => $post->id])}}" class="btn btn-success">編輯</a>
            <form action="{{route('post.delete',$post->id)}}" method="post" class="d-inline-block">
                @csrf
                @method('delete')
                <input type="submit" value="刪除" onclick="return confirm('確認刪除?')" class="btn btn-danger">
            </form>
        </div>
    </div>
</div>

@endsection
