<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>{{$post->title}}</h2>
    <div>
        {{$post->content}}
    </div>
    <div>最後更新時間{{$post->updated_at}}</div>
    <a href="{{route('post.edit',['post' => $post->id])}}">編輯</a>
    <form action="{{route('post.delete',$post->id)}}" method="post">
        @csrf
        @method('delete')
        <input type="submit" value="刪除" onclick="return confirm('確認刪除?')">
    </form>
</body>
</html>
