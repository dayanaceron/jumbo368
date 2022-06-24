@extends('Template.Template')
@section('plantillaweb')
    <h2>Listado De Materias</h2>

    {{-- <x-success-status class="mb-4" :status="session('message')" /> --}}

    <table class="table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Nombre</th>
                <th scope="col">Creditos</th>
                <th scope="col">Costo</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($subjects as $subject)
                <tr>
                    <th scope="row">{{ $subject->id }}</th>
                    <td>{{ $subject->snombre }}</td>
                    <td>{{ $subject->screditos }}</td>
                    <td>{{ $subject->scosto }}</td>
                    <td> <a href="{{ route('materias.edit', $subject) }}" class="btn btn-warning btn-sm" role="button"
                            aria-disabled="true"> <button type="button" class="btn btn-warning">Editar</button> </a>
                    </td>
                    <td>
                        <form action="{{ route('materias.destroy', $subject) }}" method="POST"
                            onsubmit="return confirm('Seguro?')">
                            @method('DELETE')
                            @csrf
                            <button class="  btn btn-danger" type="submit" rel="tooltip">Eliminar</button>
                        </form>
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
    {{ $subjects->links() }}
@endsection
