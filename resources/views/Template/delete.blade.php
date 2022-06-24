<div class="modal" id="modal-delete-{{ $teacher->id }}" tabindex="-1">
    <div class="modal-dialog">
        <form action="" method="post">
            @method('DELETE')
            @csrf
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">Eliminar Registro</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <p>Deseas Eliminar {{ $teacher->tnombres, ' ', $teacher->tapellidos }} </p>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <a href="{{ route('profesores.destroy', $teacher) }}" class="btn btn-danger btn-sm" role="button"
                        aria-disabled="true"> <button type="submit" class="btn btn-danger btn-sm">Eliminar</button> </a>

                </div>
            </div>
        </form>
    </div>
</div>
