@extends('layouts.main')
@section('top')
<div class="container mt-5">
    <h2 class="mb-4">Tạo bài viết mới</h2>
    <form action="{{ route('posts.store') }}" method="POST" novalidate enctype="multipart/form-data">
        @csrf
        <div class="mb-3">
            <label class="form-label">Thumbnail</label>
            <input type="file" class="form-control" name="thumbnail" accept="image/*" required>
            @error('thumbnail')
                <div class="text-danger">{{ $message }}</div>
                @enderror
        </div>
        <div class="mb-3">
            <label for="title" class="form-label">Tiêu đề</label>
            <input type="text" class="form-control" id="title" name="title" required>
        </div>
        <div class="mb-3">
            <label for="content" class="form-label">Nội dung</label>
            <textarea class="form-control" id="content" name="content" rows="5" required></textarea>
        </div>
        <button type="submit" class="btn btn-primary">Lưu bài viết</button>
        <a href="{{ route('posts.index') }}" class="btn btn-seconrady">Hủy</a>
    </form>
</div>
@endsection