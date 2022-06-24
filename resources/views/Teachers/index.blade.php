@extends('Template.Template');
@section('plantillaweb')
    <h2>Listado De Profesores</h2>

    {{-- <x-success-status class="mb-4" :status="session('message')" />
     --}}
     
    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombres</th>
                <th scope="col">Apellidos</th>
                <th scope="col">Direccion</th>
                <th scope="col">Correo</th>
                <th scope="col">Celular</th>
                <th scope="col">Nivel Academico</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($teachers as $teacher)
                <tr>
                    <th scope="row">{{ $teacher->id }}</th>
                    <td>{{ $teacher->tnombre }}</td>
                    <td>{{ $teacher->tapellido }}</td>
                    <td>{{ $teacher->tdireccion }}</td>
                    <td>{{ $teacher->tcorreo }}</td>
                    <td>{{ $teacher->ttelefono }}</td>
                    <td>{{ $teacher->tnivel_academico }}</td>
                    <td> <a href="{{ route('profesores.edit', $teacher) }}" class="btn btn-warning btn-sm" role="button"
                            aria-disabled="true"> <button type="button" class="btn btn-warning">Editar</button> </a>
                    </td>
                    <td>
                        <form action="{{ route('profesores.destroy', $teacher) }}" method="POST"
                            onsubmit="return confirm('Seguro?')">
                            @method('DELETE')
                            @csrf
                            <button class="  btn btn-danger" type="submit" rel="tooltip">Eliminar</button>
                        </form>

                        {{-- <button type="button" class="btn btn-danger btn-sm"
                            data-bs-target="#modal-delete-{{ $teacher }}">
                            Eliminar
                        </button> --}}
                    </td>
                </tr>
                {{-- @include('Teachers.delete') --}}
            @endforeach
        </tbody>
    </table>
    {{ $teachers->links() }}
@endsection
