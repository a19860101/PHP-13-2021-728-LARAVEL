<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
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
</body>
</html>
