@extends('layouts.menu_admin')
@section('contenido')
<div class = "container mt-5">
   <div class = "row">
     <div class = "col-md-12">
       <div class="card">
           
          <div class="card-header">
             Listado de imagenes
             <a href="{{ route('images.create')}}" class ="btn btn-success btn-sm float-right">Nueva Imagen</a>
          </div> 
          <div class="card-body">
          @if(session('info'))
             <div class="alert alert-success">
                {{session('info')}}
             </div>
          @endif
          <table class= "table table-hover table-sm">
             <thead>
                <th>Id</th>
                <th>image</th>
                <th>product_id</th>
                <th>priority</th>
                <th>created_at</th>
                <th>Delete</th>
             </thead>
             <tbody>
                @foreach($Images as $image)
                   <tr>
                      <td>
                         {{ $image->id}}
                      </td>
                      <td>
                         <img width="100px" src="{{ Storage::url($image->url)}}">
                                      
                      </td>
                      <td>
                         {{ $image->product_id}}
                      </td>
                      <td>
                         {{ $image->priority}}
                      </td>
                      <td>
                         {{ $image->created_at}}
                      </td>
                      <td>
                      <a href="{{ route('images.edit', $image->id)}}" class = "btn btn-warning btn sm">Editar</a>
                        <a href="javascript: document.getElementById('delete-{{$image->id}}').submit();" class ="btn btn-danger sm">Eliminar</a>
                        <form id="delete-{{$image->id}}"action="{{route('image.destroy',$image->id )}}" method="POST">
                          @method('delete')
                          @csrf
                        </form>
                      </td>
                   </tr>
                   @endforeach
                </tbody>
             </table>
                      
        </div>
      </div>
    </div>
  </div>
</div>
@endsection