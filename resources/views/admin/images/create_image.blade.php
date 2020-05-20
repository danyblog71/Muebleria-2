@extends('layouts.menu_admin')
@section('contenido')
<div class = "container mt-5">
   <div class = "row">
       <div class = "col-md-12">
           <div class="card">
               <div class="card-header">
                   insertar imagenes
                   <a href="" class ="btn btn-success btn-sm float-right">Nueva Imagen</a>
               </div>
               <div class="card-body">
                  <form action="{{ route('images.store') }}" method="POST" enctype = "multipart/form-data">
                  @csrf
                   <div class="form-group">
                       <label for="">url</label>
                       <input type="file" name="url" id="url" class = "form-control">
                   </div>
                   <button type="submit" class = "btn btn-primary">Guardar</button>
                   <a href="{{ route('images.index') }}" class = "btn btn-danger">cancelar</a>
                  </form>
               </div>
           </div>
       </div>
   </div>
</div>
@endsection