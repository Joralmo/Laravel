@extends('admin.template.main')
@section('title', 'Inicio')

@section('content')
    <img src="{{asset('imagenes/bg.jpg')}}" alt="...">
    <div class="caption">
       <h3>Nombre de la noticia</h3>
       <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Impedit eaque quia sint possimus rerum doloremque voluptates quod nulla libero doloribus, aspernatur reiciendis corrupti, officia, saepe quis. Amet sunt eum praesentium.</p>
	   <p><a href="#" class="btn btn-primary" role="button">Leer mas</a>
	</div>
@endsection
