@extends('Template.Template')
@section('plantillaweb')
<h2>Lista Horas</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Hora Lunes</th>
            <th scope="col">Hora Martes</th>
            <th scope="col">Hora Miercoles</th>
            <th scope="col">Hora Jueves</th>
            <th scope="col">Hora Viernes</th>
        </tr>
        <tbody>
            @foreach ($hours as $hour)
            <tr>
                <th scope="col">{{$hour->id}}</th>
                <td>{{ $hour->hora_lunes }}</td>
                    <td>{{ $hour->hora_martes }}</td>
                    <td>{{ $hour->hora_miercoles }}</td>
                    <td>{{ $hour->hora_jueves }}</td>
                    <td>{{ $hour->hora_viernes }}</td>
                    <td> <a href="{{ route('horas.edit', $hour->id) }}" target="_blankclass="btn btn-warning btn-sm" role="button"
                        aria-disabled="true"> <button type="button" class="btn btn-warning">Editar</button> </a>
                </td>
                <td>
                    <form action="{{ route('horas.destroy', $hour->id) }}" method="POST"
                        onsubmit="return confirm('Seguro?')">
                        @method('DELETE')
                        @csrf
                        <button class="  btn btn-danger" type="submit" rel="tooltip">Eliminar</button>
                    </form>
                </td>
            </tr>
            @endforeach
        </tbody>
    </thead>
</table>
{{ $hours->links() }}
@endsection
