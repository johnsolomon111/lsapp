
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
    			<div class="card-header">    
    				<h3>Serve me well b*tch</h3>
    			</div>
    			@if(count($services) > 0)
   					<ul class='list-group'>
        				@foreach ($services as $service)
            				<li class='list-group-item'>{{$service}}</li>
        				@endforeach
    				</ul>
   				 @endif
   			</div>
   		</div>
    </div>
</div>

@endsection
