<x-app-layout>

  @extends('plantilla')

  @section('header')
      <title>WikiUTA</title>
      <link rel="stylesheet" href="css/BgCarreras.css" />
      <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
      <link href="css/blog.css" rel="stylesheet">
  @endsection
  
  @section('contenido')
  <div class="container">
          <header class="blog-header py-3">
          <div class="row flex-nowrap justify-content-between align-items-center">
                <div class="col-4 pt-1">
                  <a class="btn btn-sm btn-outline-secondary" href="/Registrarse">Registrarse</a>
                </div>
                <div class="col-4 text-center">
                <a class="blog-header-logo text-dark" href="\articulos">Wiki Uta</a>
                </div>
                <div class="col-4 d-flex justify-content-end align-items-center">
  
                <a class="link-secondary" href="#" aria-label="Search">
                  <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" fill="none" stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" class="mx-3" role="img" viewBox="0 0 24 24"><title>Search</title><circle cx="10.5" cy="10.5" r="7.5"/><path d="M21 21l-5.2-5.2"/></svg>
                </a>
                <a class="btn btn-sm btn-outline-secondary" href="/Login">Ingresar</a>
  
                </div>
  
          </div>
  
          </header>
        
          <div class="nav-scroller py-1 mb-2">
            <nav class="nav d-flex justify-content-between">
            @foreach($areas as $area)
              <a class="p-2 link-secondary" href="/empleados/{{$area->area_id}}">{{$area->nombre_area}}</a>
            @endforeach
            </nav>
          </div>
  </div>
  
      <div class="container marketing">
          <hr class="featurette-divider">
          <div class="row featurette">
            <div class="col-md-7 order-md-1">
                <h1 class="featurette-heading">Datos del empleado</h1>
                
                  
                  <label>Nombre</label>
                  <p  class="form-control" name="nombre" >{{$empleado->nombre}}</p>
                  <label>Fono</label>
                  <p class="form-control" name="fono">{{$empleado->fono}}</p>
                  <label>Correo electronico</label>
                  <p class="form-control" name="correo">{{$empleado->correo}}</p>
                  <label>Cargo</label>
                  <p class="form-control" name="cargo">{{$empleado->cargo}}</p>
          
                  <div class="mt-3">
                    <a class="btn btn-primary">Editar</a>
                    <form action="{{route('empleados.destroy',$empleado->empleado_id)}} " Method ="post">
                      @csrf
                      @method('DELETE')
    
                      <input type = "submit" class="btn btn-danger col-2" value="Eliminar">
    
                    </form>
                    <a class="btn btn-secondary" href="/">Salir</a>
                  </div>
            </div>
  
            <div class="col-md-5 order-md-1">
              <img src="{{$empleado->imagen}}" width="400" height="400">
            </div>
  
          </div>
  
          <div>
              <hr class="featurette-divider">
          </div>
  @endsection

</x-app-layout>