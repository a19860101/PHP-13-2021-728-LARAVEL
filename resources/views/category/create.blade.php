@extends('template.master')
@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2>分類管理</h2>
            </div>
            <div class="col-6">
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
        </div>
    </div>
@endsection
