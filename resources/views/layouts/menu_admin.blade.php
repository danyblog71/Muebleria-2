<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<nav class="navbar navbar-expand-lg sticky-top navbar-light" style="background-color: #FFE65C";>
  <a class="navbar-brand" href="#">Muebleria</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" align="center" id="navbarNavDropdown">
    <ul class="navbar-nav">
      <li class="nav-item ">
        <a class="nav-link" href=" {{ route('admin.products_index') }}">Mostrar Productos <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href=" {{ route('admin.user_index')}}">Usuarios</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href=" {{ route('admin.category_index')}}">Categorias</a>
      </li>
      <li class="nav-item ">
        <a class="nav-link" href=" {{ route('admin.category_index')}}">Ofertas</a>
      </li>
      @auth       
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}" onclick="event.preventDefault();
          document.getElementById('logout-form').submit();">Logout</a>
        </li> 
      @endauth 
    </ul>
  </div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
  @csrf
</form>
<body>
  @yield('contenido')
  
</body>
</html>