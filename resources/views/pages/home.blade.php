@extends('layouts.app')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <h2 class="container-title">Book List</h2>
    <table class="table table-bordered table-hover">
        <tr class="table-title table-secondary">
            <td>Title</td>
            <td>Author</td>
        </tr>
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
    </table>
    <div class="d-flex justify-content-center mt-5">
        {{ $books->links() }}
    </div>
@endsection
