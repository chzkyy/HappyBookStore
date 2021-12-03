@extends('layouts.app')

@section('title')
    {{ $title }}
@endsection

@section('content')
    @foreach ($books as $book)
        @if ($loop->first)
            <h2 class="container-title">{{ $book->category->category }}</h2>
            <table class="table table-bordered table-hover">
                <tr class="table-title table-secondary">
                    <td>Title</td>
                    <td>Author</td>
                </tr>
        @endif
    @endforeach
    @if (count($books) >= 1)
        @foreach ($books as $book)
            <tr>
                <td>
                    <a href="{{ route('book', [$book->id]) }}">{{ $book->title }}</a>
                </td>
                <td>
                    {{ $book->detail->author }}
                </td>
            </tr>
        @endforeach
    @else
        <h2 class="container-title">{{$title ?? "Book List"}}</h2>
        <table class="table table-bordered table-hover">
            <tr class="table-title table-secondary">
                <td>Title</td>
                <td>Author</td>
            </tr>
            <tr>
                <td colspan="2" class="text-center">No books found</td>
            </tr>
    @endif
    </table>
@endsection
