@extends('plantilla')

@section('contenido')
<a href="articulos/create" class="btn btn-primary mt-2">Crear </a>

<table class="table">
  <thead>
    <tr>
      <th scope="col">#ID</th>
      <th scope="col">Descripcion</th>
    </tr>
  </thead>
  <tbody>
    @foreach ($articulos as $item)
    <tr>
        <td> {{$item->id}} </td>
        <td> {{$item->nombre}} </td>
    </tr>
    @endforeach
  </tbody>
</table>
@endsection