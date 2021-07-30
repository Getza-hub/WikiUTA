<x-app-layout>
    @extends('plantilla')

    <x-slot name="header">
        @section('header')
            <title>WikiUTA</title>
            <link rel="stylesheet" href="{{ asset('css/EstiloIndex.css') }}">
        @endsection

        <h2 class="font-semibold text-xl text-white-800 leading-tight fs-1" align="center">
            {{ __('Funcionarios') }}
        </h2>

        <div align="center">
            <hr class="featurette-divider">
        </div>

        @auth
            <div class="text-center">
                <div class="col">
                    <a href="/empleados/create" class="btn btn-primary col-2 float-left">Ingresar Empleado</a>
                    <a href="/articulos/create" class="btn btn-primary col-2 float-right">Ingresar Articulo</a>
                </div>
            </div>
        @endauth
    </x-slot>

    <main>
        <div class="album py-5">
            <div class="container">
                <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                    @foreach ($empleados as $empleado)
                        <div class="col">
                            <div class="card shadow-sm">
                                <img src="{{ $empleado->imagen }}" width="100%" height="225">

                                <div class="card-body">
                                    <p class="card-text">{{ $empleado->nombre }}</p>

                                    <div class="d-flex justify-content-between align-items-center">
                                        <div class="btn-group">
                                            <a class="btn btn-sm btn-outline-secondary"
                                                href="/empleados/{{ $empleado->area_id }}/{{ $empleado->empleado_id }}">Ver
                                            </a>
                                        </div>

                                        <small class="text-muted">creado en {{ $empleado->updated_at }}</small>
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
