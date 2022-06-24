@extends('Template.Template');
@section('plantillaweb')
    <h2>Registro de Profesores</h2>
    <form action="{{ route('profesores.store') }}" method="post">
        <!-- csrf_field es un metodo de autenticacion token -->
        {{ csrf_field() }}
        <div class="container">
            <div class="d-grid gap-2">

                <div class="col-lg-6 col-md-4 col-sm-2">
                    <label for="">Nombres: </label>
                    <input type="text" name="nombres" required>
                </div>
                <div class="d-grid gap-2">

                    <div class="col-lg-6 col-md-4 col-sm-2">
                        <label for="">Apellidos: </label>
                        <input type="text" name="apellidos" required>
                    </div>
                    <div class="d-grid gap-2">

                        <div class="col-lg-6 col-md-4 col-sm-2 position-relative">
                            <label for="">Direccion: </label>
                            <input type="text" name="direccion" required>
                        </div>
                        <div class="mb-3">
                            <label for="exampleInputEmail1" class="form-label">Correo</label>
                            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                                name="correo" required>
                            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
                        </div>
                        <div class="d-grid gap-2">

                            <div class="col-lg-6 col-md-4 col-sm-2">
                                <label for="">Telefono: </label>
                                <input type="number" name="telefono" maxlength="9" required>
                            </div>
                            <hr>
                            <select class="form-select" aria-label="Default select example" name="nivel" required>
                                <option selected>Nivel Academico</option>
                                <option value="Bachiller">Bachiller</option>
                                <option value="Tecnico">Tecnico</option>
                                <option value="Tecnologo">Tecnologo</option>
                                <option value="Profesional">Profesional</option>
                                <option value="Magister">Magister</option>
                                <option value="Doctorado">Doctorado</option>
                            </select>
                            <p></p>
                            <hr>
                            <button type="submit" class="btn btn-primary">Registrar</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>

    </form>
@endsection
