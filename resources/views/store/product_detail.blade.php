@extends('layouts.main')
@section('contenido')
	<div class="container"><br>
		<div class="row">
			<div class="col-md-12">
				<div class="card-header">
					
				</div>
				<div class="card-body">
					<div class="media">
                        <img src="https://i.pinimg.com/474x/1c/97/07/1c970731741e450d5d8a39f052e61a7f.jpg" class="align-self-center mr-3" alt="...">
                        <div class="media-body">
                          <h2 class="mt-0">{{ $product -> name }}</h5>
                          <h5 class="mt-0">Codigo = {{ $product -> code }}</h5>
                          <p>Costo = {{ $product -> cost }}</p>
                          <p class="mb-0">Numero en stock = {{ $product -> stock }}</p>
                          <p class="mb-0">{{ $product -> category_id }}</p>
                        </div>
                      </div>
				</div>
			</div>
		</div>
	</div>
@endsection
