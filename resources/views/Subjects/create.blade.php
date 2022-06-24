@extends('Template.Template')
@section('plantillaweb')
    <h2>Registro de Materias</h2>
    <form action="{{ route('materias.store') }}" method="post">
        <!-- csrf_field es un metodo de autenticacion token -->
        {{ csrf_field() }}
        <div class="container">
            <div class="d-grid gap-2">

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Nombre Materia: </label>
                    <input type="text" name="nombresmat" required>
                </div>
                <div class="d-grid gap-2">

                    <div class="col-lg-6 col-md-4 col-sm-2 position-relative">
                        <label for="">Creditos </label>
                        <input type="number" name="creditos" required>
                    </div>

                    <div class="d-grid gap-2">

                        <div class="col-lg-6 col-md-4 col-sm-2">
                            <label for="">Costo </label>
                            <input type="number" name="costom" required>
                        </div>
                        <p></p>
                        <hr>
                        <button type="submit" class="btn btn-primary">Registrar Materias</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="position-relative">
            <div class="position-absolute top-0 start-0 translate-middle"></div>
            <div class="position-absolute top-0 start-50 translate-middle"></div>
            <div class="position-absolute top-0 start-100 translate-middle"></div>
            <div class="position-absolute top-50 start-0 translate-middle"></div>
            <div class="position-absolute top-50 start-50 translate-middle"></div>
            <div class="position-absolute top-50 start-100 translate-middle"></div>
            <div class="position-absolute top-100 start-0 translate-middle"></div>
            <div class="position-absolute top-100 start-50 translate-middle"></div>
            <div class="position-absolute top-100 start-100 translate-middle"></div>
          </div>
    </form>
@endsection
