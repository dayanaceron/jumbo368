@extends('Template.Template')
@section('plantillaweb')
<h2>Registro Horas</h2>
<form action="{{ route('horas.store') }}" method="post">
    <!-- csrf_field es un metodo de autenticacion token -->
    {{ csrf_field() }}
    <div class="container">
        <div class="d-grid gap-2">
            <div class="col-lg-6 col-md-4 col-sm-2">
                <label for="">Hora Lunes: </label>
                <input type="text" name="hora_lunes" required>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-2" >
                <label for="">Hora Martes</label>
                <input type="text" name="hora_martes" required>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-2" >
                <label for="">Hora Miercoles</label>
                <input type="text" name="hora_miercoles" required>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-2" >
                <label for="">Hora Jueves</label>
                <input type="text" name="hora_jueves" required>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-2" >
                <label for="">Hora Viernes</label>
                <input type="text" name="hora_viernes" required>
            </div>
            <p></p>
            <hr>
            <button type="submit" class="btn btn-primary">Registrar Horas</button>

        </div>
    </div>
</form>
@endsection
