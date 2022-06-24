@extends('Template.Template')
@section('plantillaweb')
    <h2>Editar Materia</h2>
    <form action="{{ route('horas.update', $hours->id) }}" method="post">
        <!-- csrf_field es un metodo de autenticacion token -->
        @method('PUT')
        {{ csrf_field() }}
        <div class="container">
            <div class="row">
                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Hora Lunes: </label>
                    <input type="text" name="hora_lunes" required value="{{ $hours->hora_lunes }}">
                </div>
                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Hora Martes: </label>
                    <input type="text" name="hora_martes" required value="{{ $hours->hora_martes }}">
                </div>
                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Hora Miercoles: </label>
                    <input type="text" name="hora_miercoles" required value="{{ $hours->hora_miercoles }}">
                </div>
                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Hora Jueves: </label>
                    <input type="text" name="hora_jueves" required value="{{ $hours->hora_jueves }}">
                </div>
                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Hora Viernes: </label>
                    <input type="text" name="hora_viernes" required value="{{ $hours->hora_viernes }}">
                </div>
                <p></p>
                <hr>
                <button type="submit" class="btn btn-primary">Actualizar</button>
            </div>
        </div>
    </form>
@endsection
