<x-app-layout>

  @extends('plantilla')

  <x-slot name="header">
    @section('header')
        <title>WikiUTA</title>
        <link rel="stylesheet" href="{{ asset('css/EstiloIndex.css') }}">
        
    @endsection
    <h2 class="font-semibold text-xl text-blue-800 leading-tight" align="center">
      {{ __('WikiUTA') }}
    </h2>
  </x-slot>




        <main>     
          <div class="album py-5 bg-light">
            <div class="container">
        
              <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                @foreach($empleados as $empleado)
                <div class="col">
                  <div class="card shadow-sm">
                    <img src="{{$empleado->imagen}}" width="100%" height="225">
        
                    <div class="card-body">
                      <p class="card-text">{{$empleado->nombre}}</p>
                      <div class="d-flex justify-content-between align-items-center">
                        <div class="btn-group">
                          <a class="btn btn-sm btn-outline-secondary" href="/empleados/{{$empleado->area_id}}/{{$empleado->empleado_id}}">Ver</a>
                        </div>
                        <small class="text-muted">creado en {{$empleado->updated_at}}</small>
                      </div>
                    </div>
                  </div>
                </div>
                @endforeach
              </div>
            </div>
          </div>
        </main>
</x-app-layout>