@extends('layouts.menu_admin')
@section('contenido')
	<div class="container"><br>
		<div class="row">
			<div class="col-md-12">
				<div class="card-header">
					Lista de Usuarios
				<a href="{{route('admin.user_create')}}" class="btn btn-success btn-sm float-right">Nuevo Usuario</a>					
				<div class="card-body">
					@if(session('info'))
						<div class="alert alert-success">
							{{ session('info') }}
						</div>
					@endif
					<table class="table table-hover table-sm">
						<thead>
                            <th>Id</th>
                            <th>Nombre</th>
                            <th>Apellido</th>
							<th>Username</th>
                            <th>Email</th>
							<th>Rol</th>
							<th>Accion</th>
						</thead>
						<tbody>
							@foreach($users as $user)
							<tr>
								<td>
									{{ $user -> id }}
								</td>
								<td>
									{{ $user -> name }}
                                </td>
                                <td>
									{{ $user -> last_name }}
								</td>
								<td>
									{{ $user -> username }}
                                </td>
                                <td>
									{{ $user -> email }}
                                </td>
                                <td>
									{{ $user -> rol }}
								</td>
								<td>
									<a class="btn btn-primary" href="{{ route('admin.user_edit', $user->id)}}">Modificar</a>
								<a class="btn btn-danger" href="{{route('admin.user_delete', $user->id)}}">Eliminar</a>
								</td>
							</tr>
							@endforeach
						</tbody>
						
					</table>
				</div>
			</div>
		</div>
	</div>
@endsection