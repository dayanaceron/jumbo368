@extends('Template.Template')
@section('plantillaweb')
    <h2>Editar Materia</h2>
    <form action="{{ route('materias.update', $subject->id) }}" method="post">
        <!-- csrf_field es un metodo de autenticacion token -->
        @method('PUT')
        {{ csrf_field() }}
        <div class="container">
            <div class="row">

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Nombre Materia: </label>
                    <input type="text" name="nombresmat" required value="{{ $subject->snombre }}">
                </div>
                <div class="row">

                    <div class="col-lg-6 col-md-4 col-sm-2">
                        <label for="">Creditos </label>
                        <input type="number" name="creditos" required value="{{ $subject->screditos }}">
                    </div>

                    <div class="row">

                        <div class="col-lg-6 col-md-4 col-sm-2">
                            <label for="">Costo </label>
                            <input type="number" name="costo" required value="{{ $subject->scosto }}">
                        </div>
                        <p></p>
                        <hr>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection
