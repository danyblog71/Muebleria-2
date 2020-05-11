<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="{{ asset('assets/bootstrap/css/bootstrap.min.css') }}">
  <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
</head>
<div class="container-fluid bg-primary"  >
  <h2 align="center">Muebleria</h2>  
</div>
<nav class="navbar navbar-expand-lg sticky-top navbar-light" style="background-color: #FFE65C";>
  <a class="navbar-brand" href="#">Muebleria</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" align="center" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item active">
        <a class="nav-link" href=" {{ route('tienda.index') }}">Inicio <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=" {{ route('tienda.show_products',$texto='Todos Los Productos')}}">Productos</a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href=" {{ route('tienda.show_products',$texto='Ofertas')}}">Ofertas</a>
      </li>
      <li class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          Categorias
        </a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
            @foreach ($categories as $category)
        <a class="dropdown-item" href="">{{$category->name}}</a>
            @endforeach
        </div>
      </li> 
    </ul>
  </div>
</nav>
<body>
  @yield('contenido')
  <script src="{{asset('assets/jquery/jquery.min.js')}}"></script>
  <script src="{{asset('assets/bootstrap/js/bootstrap.min.js')}}"></script>
  @yield('script')
</body>
</html>