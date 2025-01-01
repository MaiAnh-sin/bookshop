@extends('layouts.app')

@section('content')
    <h1 class="mt-4">Thêm sách mới</h1>
    <form action="{{ route('books.store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="title">Tiêu đề</label>
            <input type="text" name="title" class="form-control" placeholder="Tiêu đề" required>
        </div>
        <div class="form-group">
            <label for="author">Tác giả</label>
            <input type="text" name="author" class="form-control" placeholder="Tác giả" required>
        </div>
        <div class="form-group">
            <label for="price">Giá</label>
            <input type="number" name="price" class="form-control" placeholder="Giá" required>
        </div>
        <div class="form-group">
            <label for="description">Mô tả</label>
            <textarea name="description" class="form-control" placeholder="Mô tả"></textarea>
        </div>
        <button type="submit" class="btn btn-success">Thêm sách</button>
    </form>
@endsection