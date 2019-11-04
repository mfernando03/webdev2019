@extends('layout.app') 
@section('content')    
<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<h1>Web Development</h1>        	
	@if(count($posts)>0)             
		@foreach ($posts as $post)                
		
		<div class="card" style="width: 18rem;">
			  <h5 class="card-title">{{$post->title}}</h5>
			  <p class="card-text">{{$post->description}}</p>
			  <a href="#" class="btn btn-primary">Sip Ya</a>
			</div>           
		@endforeach         
	@else             
		<h3>Tidak ada data.</h3>        
	@endif 
	{{$posts->links()}}
@endsection