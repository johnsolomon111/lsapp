@extends('layouts.app')
@section('title')
<title>Post: {{$post->title}}</title>    
@endsection

@section('content')
<h1>{{$post->title}}</h1> 
<img style="width: 200px; height: 200px; box-shadow: 2px 2px 4px #000000; border-radius: 5px;" src="/storage/cover_images/{{$post->cover_image}}">
<hr>
<h4>
    {{$post->body}}
</h4>
<small>Written on {{$post->created_at}} by {{$post->user->name}}</small>
<hr>
	@if(!Auth::guest())
		@if(Auth::user()->id == $post->user_id)
			<a href="/post" class="btn btn-dark">Go Back</a>
			<a href="/post/{{$post->id}}/edit" class="btn btn-primary">Edit</a> 
			<form action="{{ url('post', $post->id) }}" method="POST">
			    @csrf
			    @method('DELETE')
			    <br>
			<button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure to want to delete?')">Delete</button>
			</form>
		@endif
	@endif
@endsection