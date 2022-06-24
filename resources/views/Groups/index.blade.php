@extends('Template.Template')
@section('plantillaweb')
    <h2>Listado De Grupos</h2>

    {{-- <x-success-status class="mb-4" :status="session('message')" /> --}}

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Periodo</th>
                <th scope="col">Año</th>
                <th scope="col">Profesor</th>
                <th scope="col">Materia</th>
                <th scope="col">Ambiente</th>
                <th scope="col">Hora</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($groups as $group)
                <tr>
                    <th scope="row">{{ $group->id }}</th>
                    <td>{{ $group->gperiodo }}</td>
                    <td>{{ $group->ganio }}</td>
                    <td>{{ $group->teacher_id }}</td>
                    <td>{{ $group->subject_id }}</td>
                    <td>{{$group->aula_id}}</td>
                    <td>{{$group->hora_id}}</td>
                    <td> <a href="{{ route('grupos.edit', $group) }}" class="btn btn-warning btn-sm" role="button"
                            aria-disabled="true"> <button type="button" class="btn btn-warning">Editar</button> </a>
                    </td>
                    <td>
                        <form action="{{ route('grupos.destroy', $group) }}" method="POST"
                            onsubmit="return confirm('Seguro?')">
                            @method('DELETE')
                            @csrf
                            <button class="  btn btn-danger" type="submit" rel="tooltip">Eliminar</button>
                        </form>

                        {{-- <button type="button" class="btn btn-danger btn-sm"
                            data-bs-target="#modal-delete-{{ $group }}">
                            Eliminar
                        </button> --}}
                    </td>
                </tr>
                {{-- @include('groups.delete') --}}
            @endforeach
        </tbody>
    </table>
    {{ $groups->links() }}
@endsection
