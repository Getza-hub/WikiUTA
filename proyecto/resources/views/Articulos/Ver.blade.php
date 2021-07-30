<x-app-layout>

    @extends('plantilla')

    @section('header')
        <title>WikiUTA</title>
        <link rel="stylesheet" href="css/Artc.css" />
        <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
        <link href="css/blog.css" rel="stylesheet">
    @endsection

    <h2 class="font-semibold text-xl text-black-800 leading-tight fs-1" align="center">
      {{ __('Artículo') }}
    </h2>

    <hr class="featurette-divider">

    <div class="container pt-5 pb-5 rounded">
        <div class="row">
            <div class="col"><img class="rounded-circle border-primary border-4" src="{{ $articulo->imagen }}"
                    width="400" height="380"></div>
            <div class="col">
                <div class="container">
                    <div class="row">
                        <h1 class="featurette-heading">{{ $articulo->titulo_articulo }}</h1>
                    </div>
                    <div class="row"><textarea disabled class=" form-control " rows="12"
                            cols="78">{{ $articulo->descripcion_articulo }}</textarea></div>
                    <div class="row mt-4">
                        <div class="col"><a href="{{ route('articulos.edit', $articulo->articulo_id) }}"
                                class="btn btn-primary">Editar</a></div>

                        @auth
                            <div class="col">
                                <form action="{{ route('articulos.destroy', $articulo->articulo_id) }} " Method="post">
                                    @csrf
                                    @method('DELETE')

                                    <input type="submit" class="btn btn-danger" value="Eliminar">

                                </form>
                            </div>

                        @endauth
                        <div class="col"><a href="\articulos" class="btn btn-secondary">Salir</a></div>
                        <div class="col"></div>
                        <div class="col"></div>
                        <div class="col"></div>
                    </div>
                </div>
            </div>
        </div>
    </div>



</x-app-layout>
