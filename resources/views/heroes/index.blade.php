@extends('layout.app')

@section('content')
	<h1>HEROES</h1>
	@if(count($heroes) > 0)
		@foreach($heroes as $hero)
			<div class="well">
				<h3><a href="/heroes/{{$hero->id}}">{{$hero->heroname}}</a></h3>
				<small>This hero was created on {{$hero->created_at}}</small>
			</div>
		@endforeach
		{{$heroes->links()}}
	@else
		<p>No hero created!</p>
	@endif
@endsection