@extends('layouts.app')

@section('content')
    <h1>{{ $book->title }}</h1>
    <p>Tác giả: {{ $book->author }}</p>
    <p>Giá: ${{ $book->price }}</p>
    <p>Mô tả: {{ $book->description }}</p>
    <a href="{{ route('books.index') }}">Trở về</a>
@endsection