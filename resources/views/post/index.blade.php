<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>文章首頁</h1>
    @foreach($posts as $post)
    <div>
        <h2>{{$post -> title}}</h2>
        <div>
            {{$post -> content}}
        </div>
        <div>
            最後更新時間 {{$post -> updated_at}}
        </div>
    </div>
    <hr>
    @endforeach
    <a href="/create">新增文章</a>
</body>
</html>
