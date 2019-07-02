@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                <h3 style="position: absolute;">Your Blog Posts</h3>
                <a href="/post/create" class="btn btn-primary" style="margin-left: 84.8%;">Create Post</a>
                @if(count($posts) > 0)
                <br>
                <br>
                <table class="table table-striped">
                    <tr>
                        <th>Title</th>
                        <th></th>
                        <th></th>
                    </tr>
                    @foreach($posts as $post)
                        <tr>
                            <td>{{$post->title}}</td>
                            <td><a style="position: absolute;" href="/post/{{$post->id}}/edit" class="btn btn-outline-primary">Edit</a></td>
                            <td>
                                <form style="position: absolute;" action="{{ url('post', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-outline-danger" onclick="return confirm('Are you sure to want to delete?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </table>
                @else
                <hr>
                    <p>No post available</p>
                @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
