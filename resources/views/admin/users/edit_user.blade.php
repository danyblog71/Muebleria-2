@extends('layouts.menu_admin')
@section('contenido')
	<div class="container"><br>
		<div class="row">
			<div class="col-md-12">
				<div class="card-header">
					Editar Usuario
				</div>
				<div class="card-body">
                    <form method="POST" action="{{ route('admin.user_update', $user->id) }}">
                        @method('put')
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Nombre') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control" name="name" value="{{ $user->name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="LastName" class="col-md-4 col-form-label text-md-right">{{ __('Apellido') }}</label>

                            <div class="col-md-6">
                                <input id="Lastname" type="text" class="form-control" name="LastName" value="{{ $user->last_name }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="UserName" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>

                            <div class="col-md-6">
                                <input id="UserName" type="text" class="form-control" name="UserName" value="{{ $user->username }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Telefono') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="number" class="form-control" name="phone" value="{{ $user->phone }}" >
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control" name="email" value="{{ $user->email }}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="rol" class="col-md-4 col-form-label text-md-right">{{ __('Rol') }}</label>

                            <div class="col-md-6">
                                <select class="form-control" name="rol" id="rol">
                                    @foreach($roles as $rol)
                                        @if($user->roles_id == $rol->id)
                                            <option value="{{$rol->id}}" selected>{{$rol->name}}</option>
                                        @else
                                            <option value="{{$rol->id}}">{{$rol->name}}</option>
                                        @endif
                                    @endforeach                                    
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Modificar
                                </button>
                                <a class="btn btn-danger" href="#">Cancelar</a>
                            </div>
                        </div>
                    </form>
				</div>
			</div>
		</div>
	</div>
@endsection