<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <nav>
        <a href="/create">新增文章</a>
        <a href="{{route('post.create')}}">新增文章</a>
    </nav>

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
</body>
</html>
