@extends('layout.app')

@section('content')
	<h1>{{$heroes->heroname}}</h1>
	<div class = "well">
	<h3>Hero Main Stat: {{$heroes->stats}}</h3>
		<ul>
		<li>Skill 1: {{$heroes->skill1}}</li>
		<li>Skill 2: {{$heroes->skill2}}</li>
		<li>Skill 3: {{$heroes->skill3}}</li>
		<li>Skill 4: {{$heroes->skill4}}</li>
		</ul>
		<small>This hero was created on {{$heroes->created_at}}</small>
	</div>
	<a href="/heroes" class="btn btn-default"> BACK </a> 
@endsection