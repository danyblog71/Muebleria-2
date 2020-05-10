@extends('layouts.menu_admin')
@section('contenido')
	<div class="container"><br>
		<div class="row">
			<div class="col-md-12">
				<div class="card-header">
					Lista de categorias
					<a href=" {{ route('admin.category_create') }}" class="btn btn-success btn-sm float-right">Nueva categoria</a>
				</div>
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
							<th>Descripcion</th>
							<th>Acciones</th>
						</thead>
						<tbody>
							@foreach($categorys as $category)
							<tr>
								<td>
									{{ $category -> id }}
								</td>
								<td>
									{{ $category -> name }}
								</td>
								<td>
									{{ $category -> description }}
								</td>
								<td>
									<a href="javascript: document.getElementById('delete-{{  $category->id }}').submit()" class="btn btn-danger btn-sm">Eliminar</a>
									<form id="delete-{{  $category->id }}" action="{{ route('admin.category_delete', $category->id) }}" method="POST">
										@method('delete')
										@csrf
									</form>
									<a href="{{ route('admin.category_edit', $category->id)}}" class="btn btn-info btn-sm">Editar</a>
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