@extends('layouts.admin')

@section('content')
	{!!Form:open()!!}
		<div class="form-group">
			{!!Form::label('Usuario:')!!}
			{!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el ID del usuario'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Usuario:')!!}
			{!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el ID del usuario'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Usuario:')!!}
			{!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el ID del usuario'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Usuario:')!!}
			{!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el ID del usuario'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Usuario:')!!}
			{!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el ID del usuario'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Usuario:')!!}
			{!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el ID del usuario'])!!}
		</div>
		<div class="form-group">
			{!!Form::label('Usuario:')!!}
			{!!Form::text('name', null, ['class' => 'form-control', 'placeholder' => 'Ingresa el ID del usuario'])!!}
		</div>
	{!!Form:close()!!}	
@stop