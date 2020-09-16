@extends('layouts.app')
@section('content')
    <h1>Edit todo</h1>
    <form action="/todos/{{ $todo->id }}" method="post">
        @csrf
        @method('put')
        <div class="form-group">
            <label for="title">Title</label>
            <input type="text" name="title" class="form-control" id="title" value="{{ $todo->title }}"  placeholder="Enter title">
        </div>
        <div class="form-group">
            <label for="content">Content</label>
            <input type="text" name="content" class="form-control" id="content" value="{{ $todo->content }}" placeholder="Enter content">
        </div>
        <div class="form-group">
            <label for="due">Due</label>
            <input type="text" name="due" class="form-control" id="due" value="{{ $todo->due }}" placeholder="Enter due">
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
    </form>
@endsection
