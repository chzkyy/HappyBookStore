@extends('layouts.app')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <h2 class="container-title">
        @if (request()->get('search'))
            {{ request()->get('search') }}
        @endif
    </h2>
    <table class="table table-bordered table-hover">
        <tr class="table-title table-secondary">
            <td>Title</td>
            <td>Author</td>
        </tr>
        @if (count($books) > 0)
            @foreach ($books as $book)
                <tr>
                    <td>
                        <a href="{{ route('book', [$book->id]) }}">{{ $book->title }}</a>
                    </td>
                    <td>
                        {{ $book->author }}
                    </td>
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="2" class="text-center">No books found</td>
            </tr>
        @endif
    </table>

    <div class="d-flex justify-content-center mt-5">
        {{ $books->links() }}
    </div>
@endsection
