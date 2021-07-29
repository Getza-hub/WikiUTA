<x-app-layout>

@extends('plantilla')

@section('header')
    <title>WikiUta/Profesor</title>
    <link rel="stylesheet" href="css/BgCarreras.css" />
    <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
    <link href="css/blog.css" rel="stylesheet">
@endsection

<div class="container">   
      
    <div class="container marketing">
        <hr class="featurette-divider">
        <div class="row featurette">
          <div class="col-md-7 order-md-1">
              <h1 class="featurette-heading">Datos del empleado</h1>
              
                
                <label>Nombre</label>
                <input type="text" class="form-control" name="nombre" value="{{$empleado->nombre}}">
                <label>Fono</label>
                <input type="text" class="form-control" name="fono">
                <label>Correo electronico</label>
                <input type="text" class="form-control" name="correo_elect" placeholder="Ingrese correo válido">
                <label>Cargo</label>
                <input type="text" class="form-control" name="cargo">
                <label>Imagen</label>
                <input type="text" class="form-control" name="area" placeholder="Ingrese URL válida">
                <div class="mt-3">
                  <button class="btn btn-primary">Editar</button>
                  <a class="btn btn-danger" href="/">Salir</a>
                </div>
          </div>

          <div class="col-md-5 order-md-1">
            <img src="Reloj.jpg" width="400" height="400">
          </div>

        </div>

        <div>
            <hr class="featurette-divider">
        </div>

</x-app-layout>