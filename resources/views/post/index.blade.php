@extends('template.master')

@section('content')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-lg-8 col-10">
            <h2>所有文章</h2>
        </div>
        @foreach($posts as $post)
        <div class="col-lg-8 col-10 border rounded-3 p-3 my-3">
            <h3>{{$post -> title}}</h3>
            <div>
                分類:{{$post->category->title}}
            </div>
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
        <div class="w-100"></div>
        @endforeach
    </div>
</div>


@endsection
