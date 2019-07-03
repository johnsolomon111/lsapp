@extends('layouts.app')
@section('title')
<title>Edit Post</title>   
@endsection

@section('content')
    <h1>Edit</h1> 
    <form action="{{ url('post',$post->id) }}" method="POST" enctype="multipart/form-data">
        @csrf
        @method('PUT')
        <div class="form-group">
            <label for="formGroupExampleInput">Title: </label> 
            <input type="text" class="form-control" placeholder="{{$post->title}}" name="title" required>
            <label for="formGroupExampleInput">Body: </label> 
            <textarea rows="3" type="text" class="form-control" placeholder="{{$post->body}}" name="body" required></textarea>
            <br>
            <input type="file" name="cover_image">
            <br>

            <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </form>
    <hr>
@endsection