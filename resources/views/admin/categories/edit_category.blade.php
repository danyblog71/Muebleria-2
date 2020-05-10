@extends('layouts.menu_admin')
@section('contenido')
	<div class="container"><br>
		<div class="row">
			<div class="col-md-12">
				<div class="card-header">
					Editar categoria
				</div>
				<div class="card-body">
					<form action="{{ route('admin.category_update', $category->id) }}" method="POST">
						@method('put')
						@csrf
						<div class="form-group">
							<label for="">Nombre</label>
							<input type="text" name="name" value="{{ $category->name }}" class="form-control">
						</div>
						<div class="form-group">
							<label for="">Descripcion</label>
							<input type="text" name="description" value="{{ $category->description }}" class="form-control">
						</div>
						<button type="submit" class="btn btn-primary">Guardar</button>
						<a href=" {{ route('admin.category_index') }}" class="btn btn-danger">Cancelar</a>
					</form>
				</div>
			</div>
		</div>
	</div>
@endsection