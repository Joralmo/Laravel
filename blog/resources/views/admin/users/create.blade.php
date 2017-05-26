@extends('admin.template.main')

@section('title', 'Crear usuario')

@section('content')
    {!! Form::open(['route'=>'users.store', 'method'=>'POST']) !!}
		<div class="form-group">
			{!! Form::label('name', 'Nombre') !!}
			{!! Form::text('name', null, ['class'=>'form-control', 'placeholder'=>'Nombre completo' , 'required'] ) !!}
		</div>
		<div class="form-group">
			{!! Form::label('email', 'Correo electronico') !!}
			{!! Form::email('email', null, ['class'=>'form-control', 'placeholder'=>'Correo electronico' , 'required'] ) !!}
		</div>
		<div class="form-group">
			{!! Form::label('password', 'Contraseña') !!}
			{!! Form::password('password', ['class'=>'form-control', 'placeholder'=>'Contraseña' , 'required'] ) !!}
		</div>
		<div class="form-group">
			{!! Form::label('type', 'Tipo') !!}
			{!! Form::select('type', ['member' => 'Miembro', 'admin'=>'Administrador'],null, ['class'=>'form-control']) !!}
		</div>
		<div class="form-group">
			{!! Form::submit('Registrar', ['class'=>'btn btn-primary']) !!}
		</div>
    {!! Form::close() !!}
@endsection