@extends('Template.Template')
@section('plantillaweb')
<h2>Lista Aulas</h2>
<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Aula Lunes</th>
            <th scope="col">Aula Martes</th>
            <th scope="col">Aula Miercoles</th>
            <th scope="col">Aula Jueves</th>
            <th scope="col">Aula Viernes</th>
        </tr>
        <tbody>
            @foreach ($ambients as $ambient)
            <tr>
                <th scope="col">{{$ambient->id}}</th>
                <td>{{ $ambient->aula_lunes }}</td>
                    <td>{{ $ambient->aula_martes }}</td>
                    <td>{{ $ambient->aula_miercoles }}</td>
                    <td>{{ $ambient->aula_jueves }}</td>
                    <td>{{ $ambient->aula_viernes }}</td>
                    <td> <a href="{{ route('aulas.edit', $ambient->id) }}" target="_blankclass="btn btn-warning btn-sm" role="button"
                        aria-disabled="true"> <button type="button" class="btn btn-warning">Editar</button> </a>
                </td>
                <td>
                    <form action="{{ route('aulas.destroy', $ambient->id) }}" method="POST"
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
{{ $ambients->links() }}
@endsection
