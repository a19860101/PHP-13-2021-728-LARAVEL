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
                @if($post->cover == null)
                <img src="{{asset('storage/images/question-marks.jpg')}}" class="w-100">
                @else
                <img src="{{asset('storage/images/'.$post->cover)}}" class="w-100">
                @endif
            </div>
            <div>
                分類:{{$post->category->title}}
                <br>
                作者:{{$post->user->name}}
            </div>
            <div class="my-5">
                {{Str::limit($post->content,200)}}
                <div>
                    <a href="/post/{{$post->id}}">繼續閱讀</a>
                    <a href="{{route('post.show',['post' => $post->id])}}">繼續閱讀</a>
                </div>
            </div>
            <div>
                最後更新時間 {{$post -> updated_at}}
                <br>
                <?php
                    Carbon\Carbon::setLocale('zh_TW');
                ?>
                最後更新時間 {{ Carbon\Carbon::parse($post->updated_at)->diffForHumans()}}

            </div>
        </div>
        <div class="w-100"></div>
        @endforeach
    </div>
</div>


@endsection
