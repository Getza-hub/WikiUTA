<x-app-layout>

    @extends('plantilla')

    @section('header')
        <title>WikiUTA</title>
        <link rel="stylesheet" href="css/Artc.css" />
        <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
        <link href="css/blog.css" rel="stylesheet">
    @endsection

    <h2 class="font-semibold text-xl text-black-800 leading-tight fs-1" align="center">
        {{ __('Edición de funcionario') }}
    </h2>

    <!--FORMULARIO EDITAR-->
    <div>
        <hr class="featurette-divider">
    </div>
    @auth
        <div class="container">
            <h3>Editar Empleado</h3>
            <div class="row-3">
                <div class="col-xl-12">
                    <form action="{{ route('empleados.update', $empleado->empleado_id) }}" method="post">
                        @csrf
                        @method('PUT')
                        <div class="form-group">
                            <label class for="imagen"><strong> URL IMAGEN: </strong></label>
                            <input type="text" class="form-control" name="imagen" value="{{ $empleado->imagen }}">
                        </div>
                        <div class="form-group">
                            <label class for="nombre"><strong> NOMBRE: </strong></label>
                            <input type="text" class="form-control" name="nombre" value="{{ $empleado->nombre }}">
                        </div>
                        <div class="form-group">
                            <label for="fono"><strong>FONO: </strong></label>
                            <input type="text" class="form-control" name="fono" value="{{ $empleado->fono }}">
                        </div>
                        <div class="form-group">
                            <label for="correo"><strong>CORREO: </strong></label>
                            <input type="text" class="form-control" name="correo" value="{{ $empleado->correo }}">
                        </div>
                        <div class="form-group">
                            <label for="cargo"><strong>CARGO: </strong></label>
                            <input type="text" class="form-control" name="cargo" value="{{ $empleado->cargo }}">
                        </div>
                        <div class="mt-2">
                            <button type="submit" class="btn btn-success">Guardar</button>
                            <a href="/empleados/{{ $empleado->area_id }}/{{ $empleado->empleado_id }}"
                                class="btn btn-danger">Cancelar</a>
                        </div>
                    </form>
                </div>
            </div>
            <div>
                <hr class="featurette-divider">
            </div>
        </div>

    @else
        <div class="text-center">
            <div class="col">
                <a href="/login" class="btn btn-primary col-2 text-center">Loguéate para editar</a>
            </div>
            <div>. </div>
            <div>. </div>
        </div>
    @endauth

</x-app-layout>
