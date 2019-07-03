@extends('layouts.app')
@section('title')
<title>Create Post</title>   
@endsection

@section('content')
    <h1>Create</h1> 
    <form action="{{ url('post') }}" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="form-group">
            <label for="formGroupExampleInput">Title: </label> 
            <input type="text" class="form-control" placeholder="Title" name="title">
            <label for="formGroupExampleInput">Body: </label> 
            <textarea rows="3" type="text" class="form-control" placeholder="Body" name="body"></textarea>
            <input type="file" name="cover_image" required>
            <br>
            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <hr>
@endsection