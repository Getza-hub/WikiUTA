<x-app-layout>

    @extends('plantilla')

    <x-slot name="header">
        @section('header')
            <title>WikiUTA</title>
            <link rel="stylesheet" href="{{ asset('css/EstiloIndex.css') }}">

        @endsection
        <h2 class="font-semibold text-xl text-black-800 leading-tight fs-1" align="center">
            {{ __('Creación de empleado') }}
        </h2>


        <div align="center">
            <hr class="featurette-divider">
        </div>


    </x-slot>

    <!--FORMULARIO EDITAR-->
    <div>
        <hr class="featurette-divider">
    </div>
    <div class="container">
        <h3>Nuevo Empleado</h3>
        <div class="row-3">
            <div class="col-xl-12">
                <form action="{{ route('empleados.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label class for="imagen"><strong> URL IMAGEN: </strong></label>
                        <input type="text" class="form-control" name="imagen" required maxlength="250">
                    </div>
                    <div class="form-group">
                        <label class for="nombre"><strong> NOMBRE: </strong></label>
                        <input type="text" class="form-control" name="nombre" required maxlength="60">
                    </div>
                    <div class="form-group">
                        <label for="fono"><strong>FONO: </strong></label>
                        <input type="text" class="form-control" name="fono" required maxlength="15">
                    </div>
                    <div class="form-group">
                        <label for="correo"><strong>CORREO: </strong></label>
                        <input type="text" class="form-control" name="correo" required maxlength="250">
                    </div>
                    <div class="form-group">
                        <label for="cargo"><strong>CARGO: </strong></label>
                        <input type="text" class="form-control" name="cargo" required maxlength="250">
                    </div>
                    <div class="form-group">
                        <label for="area"><strong>AREA: </strong></label>
                        <select class="form-control" name="area" required>
                            <option value="">Seleccione</option>
                            <option value="1">Profesores</option>
                            <option value="2">Salud</option>
                            <option value="3">Registraduria</option>
                            <option value="4">Asistentes sociales</option>
                            <option value="5">Recaudacion</option>
                        </select>
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-success">Guardar</button>
                        <a href="/" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
        <div>
            <hr class="featurette-divider">
        </div>
    </div>
</x-app-layout>
