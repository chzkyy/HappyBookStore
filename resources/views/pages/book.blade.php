@extends('layouts.app')

@section('title')
    {{ $title }}
@endsection

@section('content')
    <h2 class="container-title">Book Detail</h2>
        <div>
            <p>Title: {{ $books->book->title }}</p>
            <p>Author: {{ $books->author }}</p>
            <p>Year: {{ $books->year }}</p>
            <p>Description</p>
            <p>{{ $books->description }}</p>
        </div>     
    </table>
@endsection