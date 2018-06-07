@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <h1 class="h3">
            Hotel Creado, id : {{$hotel_id}}
        </h1>
        <br>
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Crear Cuarto</div>

                <div class="card-body">
                    <form method="POST" action="/crearCuarto/">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">Nombre</label>

                            <div class="col-md-6">
                                <input id="nombre" type="text" class="form-control" name="nombre" required autofocus>

                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">Precio Noche</label>

                            <div class="col-md-6">
                                <input id="precio" type="text" class="form-control" name="precio" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">Descripción</label>

                            <div class="col-md-6">
                                <input id="descripcion" type="text" class="form-control" name="descripcion" required autofocus>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">Foto</label>

                            <div class="col-md-6">
                                <input id="imagen" type="text" class="form-control" name="imagen" required autofocus>
                            </div>
                        </div>

                         <div class="form-group row">
                            <label for="telefono" class="col-md-4 col-form-label text-md-right">Tipo</label>

                            <div class="col-md-6">
                               <select id="tipo" name="tipo">
                                    <option value="1">Tipo 1</option>
                                    <option value="2">Tipo 2</option>
                                    <option value="3">Tipo 3</option>
                               </select>
                            </div>
                        </div>   

                        <input id="hotel" type="hidden" class="form-control" name="hotel" value="{{$hotel_id}}">

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    Crear Cuarto
                                </button>
                            </div>
                        </div>



                        
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
