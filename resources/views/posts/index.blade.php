@extends('layouts.main')
@section('top')
<h1 class="mb-4">Danh Sách bài viết</h1>
<a href="{{ route('posts.create') }}" class="btn btn-primary mb-3">Thêm bài viết</a>
@if(session('message'))
<div class="alert alert-success">
    {{ session('message') }}
</div>
@endif
<table class="table table-bodered">
    <thead>
        <tr>
            <th>ID</th>
            <th>Hinh ảnh</th>
            <th>Tiêu đề</th>
            <th>Ngày tạo</th>
            <th>Hành động</th>
        </tr>
    </thead>
    <tbody>
        @foreach ( $posts as $post )
         <tr>
            <td>{{ $post->id }}</td>
            <td><img width="150px" src="{{ asset('storage/' . $post->thumbnail)  }}" alt="{{ $post->title }}"></td>
            <td>{{  $post->title }}</td>
            <td>{{  $post->created_at}}</td>
            <td>
                <a href="{{ route('posts.edit', ['id'=>$post->id]) }}" class="btn btn-sm btn-warning">Sửa</a>
                <a href="{{ route('posts.delete', ['id'=>$post->id]) }}" class="btn btn-sm btn-danger">Xóa</a>
            </td>
        </tr>
        @endforeach
       
    </tbody>
</table>
@endsection