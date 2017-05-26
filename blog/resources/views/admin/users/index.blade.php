@extends('admin.template.main')
@section('title', 'Lista de usuarios')

@section('content')
	<a href="{{route('users.create')}}" class="btn btn-info">Registrar nuevo usuario</a><br><br><hr>
	<table class="table table-striped">
		<thead>
			<th>ID</th>
			<th>Nombre</th>
			<th>Correo</th>
			<th>Tipo</th>
			<th>Accion</th>
		</thead>
		<tbody>
			@foreach($users as $user)
				<tr>
					<td>{{$user->id}}</td>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					<td>
						@if($user->type=="admin")
							<span class="label label-danger">{{$user->type}}</span>
						@else
							<span class="label label-primary">{{$user->type}}</span>
						@endif
					</td>
					<td>
						<a href="{{route('users.edit', $user->id)}}" class="btn btn-danger">
							<span class="glyphicon glyphicon-pencil" aria-hidden="true"></span>
						</a>
						<a onclick="return confirm('¿Desea borrar este usuario?')" href="{{route('admin.users.destroy', $user->id)}}" class="btn btn-warning">
							<span class="glyphicon glyphicon-remove" aria-hidden="true"></span>
						</a>
					</td>
				</tr>
			@endforeach
		</tbody>
	</table>
	<center>{!! $users->render() !!}</center>
@endsection()