@extends('plantilla')

@section('contenido')
<h1> Formulario de creacion </h1>

                <form action="\articulos" method="POST">
                    @csrf
                    <div class="mt-3">
                        <label class="form-label" for="">ID</label>
                        <input type="text" class="form-control" id="id" name="id" tabindex="1"> 
                    </div>
                    <div class="mt-3">
                        <label class="form-label" for="">DESCRIPCION</label>
                        <textarea type="text" class="form-control" id="descripcion" name="descripcion" tabindex="2">  </textarea>                   

                    </div>
                    <div class="mt-5">
                        <a href="\articulos" class="btn btn-primary col-1">Cancelar</a>
                        <button class="btn btn-success col-1" type="submyt">Crear</button>
                    </div>
                </form>





        </div>

    </div>
</div>
@endsection