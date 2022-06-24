@extends('Template.Template')
@section('plantillaweb')
<h2>Registro De Aulas</h2>
<form action="{{ route('aulas.store') }}" method="post">
    <!-- csrf_field es un metodo de autenticacion token -->
    {{ csrf_field() }}
    <div class="container">
        <div class="d-grid gap-2">
            <div class="col-lg-6 col-md-4 col-sm-2">
                <label for="">Aula Lunes: </label>
                <input type="text" name="aula_lunes" required>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-2">
                <label for="">Aula Martes: </label>
                <input type="text" name="aula_martes" required>
            </div>
            <div class="col-lg-6 col-md-4 col-sm-2">
                <label for="">Aula Miercoles: </label>
                <input type="text" name="aula_miercoles" required>
            </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
                <label for="">Aula Jueves: </label>
                <input type="text" name="aula_jueves" required>
            </div>

            <div class="col-lg-6 col-md-4 col-sm-2">
                <label for="">Aula Viernes: </label>
                <input type="text" name="aula_viernes" required>
            </div>
        </div>
        <p></p>
        <hr>
        <button type="submit" class="btn btn-primary">Registrar Aulas</button>
        </div>
    </div>
</form>
@endsection
