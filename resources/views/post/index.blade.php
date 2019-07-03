@extends('layouts.app')
@section('title')
<title>{{$title}}</title>   
@endsection

@section('content')
    <h1>Posts</h1> 
    @if(count($posts) > 0)
        @foreach ($posts as $post)
            <ul class="list-group list-group-flush">
                <div class="row">
                    <div class="col-md-4 col-sm-4">
                        <img style="width: 200px; height: 200px; box-shadow: 2px 2px 4px #000000; border-radius: 5px;" src="/storage/cover_images/{{$post->cover_image}}">
                    </div>
                    <div class="col-md-8 col-sm-8">
                        <h4><a class="badge badge-light" href="/post/{{$post->id}}"> {{$post->title}}</a></h4> 
                        <small>Written on {{$post->created_at}} by  {{$post->user->name}}</small>    
                    </div>

                </div>
                <hr>
            </ul> 

        @endforeach
        <br>
        {{$posts->links()}}
    @else
        <p>No Posts Found</p>
    @endif

@endsection