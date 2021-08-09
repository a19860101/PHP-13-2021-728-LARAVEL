@extends('template.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>分類管理</h2>
            </div>
            <div class="col-8">
                <form action="{{route('category.store')}}" method="post">
                    @csrf
                    <div class="mb-3">
                        <label for="" class="form-label">分類名稱</label>
                        <input type="text" name="title" class="form-control">
                    </div>
                    <div class="mb-3">
                        <label for="" class="form-label">分類英文名稱</label>
                        <input type="text" name="slug" class="form-control">
                    </div>
                    <input type="submit" value="新增分類" class="btn btn-primary">
                </form>
            </div>
            <div class="col-4">
                <ul class="list-group mt-4">
                    @foreach($categories as $category)
                    <li class="list-group-item d-flex justify-content-between align-items-center">
                        {{$category->title}}
                        <form action="{{route('category.destroy',$category->id)}}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" class="btn btn-danger btn-sm" value="刪除" onclick="return confirm('確認刪除？')">
                        </form>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
@endsection
