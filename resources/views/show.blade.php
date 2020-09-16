@extends('layouts.app')
@section('content')
    <a href="/" class="btn btn-secondary mt-3 mb-1">Go Back</a>
    <h1>{{ $todo->title }}</h1>
    <span class="badge badge-danger">{{ $todo->due }} </span>
        <hr>
        <p>{{ $todo->content }}</p>

    <form action="/todos/{{ $todo->id }}" method="post">
        @csrf
        @method('DELETE')
        <button type="submit" class="btn btn-danger mt-3 mb-1 float-right">Delete</button>
    </form>
    <a href="/todos/{{ $todo->id }}/edit" class="btn btn-warning mt-3 mb-1">Edit</a>




@endsection
