@extends('layouts.app')

@section('content')

	{!! Form::model($doctor, [
	    'method' => 'PATCH',
	    'route' => ['doctor.update', $doctor->id]
	]) !!}
	<div class="col-sm-6">

		<div class="form-group">
		    {!! Form::label('first_name', 'First Name:', ['class' => 'control-label']) !!}
		    {!! Form::text('first_name', $doctor->first_name, ['class' => 'form-control']) !!}
		</div>
		<div class="form-group">
		    {!! Form::label('last_name', 'Last Name:', ['class' => 'control-label']) !!}
		    {!! Form::text('last_name', $doctor->last_name, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
		    {!! Form::label('email', 'Email:', ['class' => 'control-label']) !!}
		    {!! Form::text('email', $doctor->email, ['class' => 'form-control']) !!}
		</div>

		<div class="form-group">
		    {!! Form::label('phone', 'Phone:', ['class' => 'control-label']) !!}
		    {!! Form::text('phone', $doctor->phone, ['class' => 'form-control']) !!}
		</div>

		{!! Form::submit('Update', ['class' => 'btn btn-primary']) !!}

		{!! Form::close() !!}

	</div>
	


@endsection