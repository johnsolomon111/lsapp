@extends('layouts.app')
@section('title')
<title>{{$title}}</title>   
@endsection

@section('content')
    <h1>Posts</h1> 
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <ul class="list-group list-group-flush">
                <li class="list-group-item">
                <h4><a class="badge badge-light" href="/post/{{$post->id}}"> {{$post->title}}</a></h4> 
                <small>Written on {{$post->created_at}} by  {{$post->user->name}}</small>   
                </li>
            </ul>    
        @endforeach
        <br>
        {{$posts->links()}}
    @else
        <p>No Posts Found</p>
    @endif

@endsection