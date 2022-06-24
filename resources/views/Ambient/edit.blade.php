@extends('Template.Template')
@section('plantillaweb')
    <h2>Editar Aulas</h2>
    <form action="{{ route('materias.update', $ambients->id) }}" method="post">
        <!-- csrf_field es un metodo de autenticacion token -->
        @method('PUT')
        {{ csrf_field() }}
        <div class="container">
            <div class="row">
            <div class="col-lg-6 col-md-4 col-sm-2">
                <label for="">Aula Lunes: </label>
                <input type="text" name="aula_lunes" required  value="{{ $ambients->aula_lunes }}">
            </div>
            <div class="col-lg-6 col-md-4 col-sm-2">
                <label for="">Aula Lunes: </label>
                <input type="text" name="aula_martes" required  value="{{ $ambients->aula_martes }}">
            </div>
            <div class="col-lg-6 col-md-4 col-sm-2">
                <label for="">Aula Lunes: </label>
                <input type="text" name="aula_miercoles" required  value="{{ $ambients->aula_miercoles }}">
            </div>
            <div class="col-lg-6 col-md-4 col-sm-2">
                <label for="">Aula Lunes: </label>
                <input type="text" name="aula_jueves" required  value="{{ $ambients->aula_jueves }}">
            </div>
            <div class="col-lg-6 col-md-4 col-sm-2">
                <label for="">Aula Lunes: </label>
                <input type="text" name="aula_viernes" required  value="{{ $ambients->aula_viernes }}">
            </div>
            <p></p>
                <hr>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </form>
@endsection
