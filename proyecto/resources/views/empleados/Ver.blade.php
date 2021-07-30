<x-app-layout>
    @extends('plantilla')

    <x-slot name="header">
        @section('header')
            <title>Home|WikiUTA</title>
            <link rel="stylesheet" href="{{ asset('css/EstiloIndex.css') }}">

        @endsection

        <h2 class="font-semibold text-xl text-black-800 leading-tight fs-1" align="center">
            {{ __('Funcionario') }}
        </h2>

        <div align="center">
            <hr class="featurette-divider">
        </div>

        @auth
            <div class="text-center">
                <div class="col">
                    <a href="/empleados/create" class="btn btn-primary col-2 float-left">Crear Empleado</a>
                    <a href="/articulos/create" class="btn btn-primary col-2 float-right">Crear Articulo</a>
                </div>
            </div>
        @endauth

    </x-slot>

    <div class="container marketing">
        <hr class="featurette-divider">
        <div class="row featurette">
            <div class="col-md-7 order-md-1">
                <h1 class="featurette-heading">Datos del empleado</h1>


                <label>Nombre</label>
                <p class="form-control" name="nombre">{{ $empleado->nombre }}</p>
                <label>Fono</label>
                <p class="form-control" name="fono">{{ $empleado->fono }}</p>
                <label>Correo electronico</label>
                <p class="form-control" name="correo">{{ $empleado->correo }}</p>
                <label>Cargo</label>
                <p class="form-control" name="cargo">{{ $empleado->cargo }}</p>

                <div class="row">
                    <div class="col"><a href="{{ route('empleados.edit', $empleado->empleado_id) }}"
                            class="btn btn-primary">Editar</a></div>
                    <div class="col">
                        <form action="{{ route('empleados.destroy', $empleado->empleado_id) }} " Method="post">
                            @csrf
                            @method('DELETE')

                            <input type="submit" class="btn btn-danger" value="Eliminar">

                        </form>
                    </div>
                    <div class="col"><a class="btn btn-secondary" href="/empleados/{{ $empleado->area_id }}">Salir</a>
                    </div>
                    <div class="col"></div>
                    <div class="col"></div>
                    <div class="col"></div>
                </div>


                <div class="mt-3">



                </div>
            </div>

            <div class="col-md-5 order-md-1">
                <img class="rounded-circle border-blue border-4" src="{{ $empleado->imagen }}" width="400"
                    height="400">
            </div>

        </div>

        <div>
            <hr class="featurette-divider">
        </div>

</x-app-layout>
