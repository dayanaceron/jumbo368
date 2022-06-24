@extends('Template.Template')
@section('plantillaweb')
    <h2>Registro de Grupos</h2>
    <form action="{{ route('grupos.store' ) }}" method="post">
        <!-- csrf_field es un metodo de autenticacion token -->
        {{ csrf_field() }}
        <div class="container">
            <div class="d-grid gap-2">

                <div class="col-lg-6 col-md-4 col-sm-2 ">
                    <label for="">Periodo Academico</label>
                    <input type="text" name="periodo" required>
                </div>
                <div class="d-grid gap-2">

                    <div class="col-lg-6 col-md-4 col-sm-2">
                        <label for="">Año </label>
                        <input type="year" name="año" required>
                    </div>
                    <div class="d-grid gap-2">

                        {{-- <div class="col-lg-6 col-md-4 col-sm-2">
                            <label for="">Profesores </label>
                            <input type="number" name="profesorid" required>

                        </div> --}}
                        <div class="col-lg-6 col-md-4 col-sm-2">
                            <select name="form-select" name="teacher_id">
                                <option selected="false" disabled="disabled">Profesores</option>
                                @foreach ($teachers as $teacher)
                                    <option value="{{ $teacher->id }}"> {{ $teacher->tnombre }}
                                        {{ $teacher->tapellido }}
                                    </option>
                                @endforeach
                            </select>
                        </div>

                        <div class="col-lg-6 col-md-4 col-sm-2">
                            <select name="form-select" name="subject_id">
                                <option selected="false" disabled="disabled">Materias</option>
                                @foreach ($subjects as $subject)
                                    <option value="{{ $subject->id }}">{{ $subject->snombre }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-2">
                            <select name="form-select" name="aula_id">
                                <option selected="false" disabled="disabled">Ambiente</option>
                                @foreach ($ambients as $ambient)
                                    <option value="{{ $ambient->id }}">{{ $ambient->aula_lunes }}</option>
                                    <option value="{{ $ambient->id }}">{{ $ambient->aula_martes }}</option>
                                    <option value="{{ $ambient->id }}">{{ $ambient->aula_miercoles }}</option>
                                    <option value="{{ $ambient->id }}">{{ $ambient->aula_jueves }}</option>
                                    <option value="{{ $ambient->id }}">{{ $ambient->aula_viernes }}</option>
                                @endforeach
                            </select>
                        </div>
                        <div class="col-lg-6 col-md-4 col-sm-2">
                            <select name="form-select" name="hora_id">
                                <option selected="false" disabled="disabled">Hora</option>
                                @foreach ($hours as $hour)
                                    <option value="{{ $hour->id }}">{{ $hour->hora_lunes }}</option>
                                    <option value="{{ $hour->id }}">{{ $hour->hora_martes }}</option>
                                    <option value="{{ $hour->id }}">{{ $hour->hora_miercoles }}</option>
                                    <option value="{{ $hour->id }}">{{ $hour->hora_jueves }}</option>
                                    <option value="{{ $hour->id }}">{{ $hour->hora_viernes }}</option>
                                @endforeach
                            </select>
                        </div>
                        {{-- <div class="col-lg-6 col-md-4 col-sm-2">
                            <label for="">Materia </label>
                            <input type="number" name="subjectid" required>
                        </div> --}}
                        <p></p>
                        <hr>
                        <button type="submit" class="btn btn-primary">Registrar</button>
                    </div>
                </div>
            </div>
        </div>

    </form>
@endsection
