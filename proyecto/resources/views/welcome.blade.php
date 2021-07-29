<x-app-layout>
  @extends('plantilla')

  <x-slot name="header">
    @section('header')
        <title>Home|WikiUTA</title>
        <link rel="stylesheet" href="{{ asset('css/EstiloIndex.css') }}">
        
    @endsection
    <h2 class="font-semibold text-xl text-blue-800 leading-tight" align="center">
      {{ __('WikiUTA') }}
    </h2>
  </x-slot>

  <div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
      <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg">      
          <div class="container">
            <main>     
              
            
                  <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach($articulos_ordenados as $articulo)
                      <div class="col">
                        <div class="card shadow-sm" height="50px" width="50px">
                          <div align="center">
                            <img src="{{ $articulo->imagen}} "width="auto" height="auto">
                          </div>
                          
              
                          <div class="card-body">
                            <p class="card-text">{{$articulo->titulo_articulo}}</p>
                            <div class="d-flex justify-content-between align-items-center">
                              <div class="btn-group">
                                <a class="btn btn-sm btn-outline-secondary" href="articulos/{{$articulo->articulo_id}}">Ver</a>
                                <button type="button" class="btn btn-sm btn-outline-secondary">Editar</button>
                              </div>
                              <small class="text-muted">{{$articulo->created_at}}</small>
                            </div>
                          </div>
                        </div>
                      </div>
                    @endforeach
                  </div>
              
            </main>
          </div>
      </div>
    </div>
</x-app-layout>