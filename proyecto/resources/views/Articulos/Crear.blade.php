<x-app-layout>
    @extends('plantilla')

    @section('header')
        <title>WikiUta/Profesor</title>
        <link rel="stylesheet" href="css/Artc.css" />
        <link href="https://fonts.googleapis.com/css?family=Playfair&#43;Display:700,900&amp;display=swap" rel="stylesheet">
        <link href="css/blog.css" rel="stylesheet">
    @endsection

    <h2 class="font-semibold text-xl text-black-800 leading-tight fs-1" align="center">
        {{ __('Creación de artículo') }}
    </h2>

    <!--FORMULARIO EDITAR-->
    <div>
        <hr class="featurette-divider">
    </div>

    <div class="container">
        <h3>Nuevo Articulo</h3>
        
        <div class="row-3">
            <div class="col-xl-12">
                <form action="{{ route('articulos.store') }}" method="post">
                    @csrf
                    <div class="form-group">
                        <label for="imagen"><strong> URL IMAGEN: </strong></label>
                        <input type="text" class="form-control" name="imagen" required maxlength="250">
                    </div>
                    <div class="form-group">
                        <label for="titulo"><strong>TITULO: </strong></label>
                        <input type="text" class="form-control" name="titulo" required maxlength="50">
                    </div>
                    <div class="form-group">
                        <label for="descripcion"><strong>DESCRIPCION: </strong></label>
                        <textarea type="text" class="form-control" name="descripcion" required
                            maxlength="250"></textarea>
                    </div>
                    <div class="form-group mt-2">
                        <button type="submit" class="btn btn-success">Guardar</button>
                        <a href="/articulos" class="btn btn-danger">Cancelar</a>
                    </div>
                </form>
            </div>
        </div>
        <div>
            <hr class="featurette-divider">
        </div>
    </div>
</x-app-layout>
