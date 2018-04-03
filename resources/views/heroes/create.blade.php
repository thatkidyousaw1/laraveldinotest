@extends('layout.app')

@section('content')
	<h1>Create a Hero</h1>

	{!! Form::open(['action' => 'CreateHeroController@store', 'method' => 'POST']) !!}
    	<div class="form-group">
    		{{Form::label('heroname', 'Hero Name')}}
    		{{Form::text('heroname', '', ['class' => 'form-control', 'placeholder' => 'Hero Name'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('stats', 'Hero Stat')}}
    		{{Form::text('stats', '', ['class' => 'form-control', 'placeholder' => 'Hero Stat'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('skill1', 'Hero Skill 1')}}
    		{{Form::text('skill1', '', ['class' => 'form-control', 'placeholder' => 'Hero Skill 1'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('skill2', 'Hero Skill 2')}}
    		{{Form::text('skill2', '', ['class' => 'form-control', 'placeholder' => 'Hero Skill 2'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('skill3', 'Hero Skill 3')}}
    		{{Form::text('skill3', '', ['class' => 'form-control', 'placeholder' => 'Hero Skill 3'])}}
    	</div>
    	<div class="form-group">
    		{{Form::label('skill4', 'Hero Skill 4')}}
    		{{Form::text('skill4', '', ['class' => 'form-control', 'placeholder' => 'Hero Skill 4'])}}
    	</div>
    	{{Form::submit('Submit', ['class'=>'btn btn-primary'])}}
	{!! Form::close() !!}
@endsection