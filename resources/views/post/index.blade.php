@extends('template.master')

@section('content')

@foreach($posts as $post)
<div>
    <h2>{{$post -> title}}</h2>
    <div>
        {{$post -> content}}
        <div>
            <a href="/post/{{$post->id}}">繼續閱讀</a>
            <a href="{{route('post.show',['post' => $post->id])}}">繼續閱讀</a>
        </div>
    </div>
    <div>
        最後更新時間 {{$post -> updated_at}}
    </div>
</div>
<hr>
@endforeach

@endsection
