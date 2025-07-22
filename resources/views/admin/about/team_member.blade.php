<div class="card shadow mb-4">
    <div class="card-header d-flex justify-content-between align-items-center py-3">
        <h5 class="card-title text-primary"><i class="bi bi-people"></i> Miembros</h5>
        <div class="card-tools">
            <button type="button" class="btn btn-sm btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal-add-team_member" title="Agregar">
                <i class="bi bi-plus-lg"></i> Agregar
            </button>
        </div>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Foto</th>
                        <th>Nombre</th>
                        <th>Posición</th>
                        <th>CV</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                @foreach($team_members as $team_member)
                    <tr>
                        {{--<td>{{ $loop->iteration }}</td>--}}
                        <td>
                        @if($team_member->photo)
                        <img src="{{ Storage::url($team_member->photo) }}" loading="lazy" width="30" height="30">
                        @endif
                        </td>
                        <td>{{ $team_member->name }}</td>
                        <td>{{ $team_member->position }}</td>
                        <td>{{ $team_member->cv }}</td>
                        <td>
                            <div class="btn-group" role="group">
                                <button type="button" class="btn btn-info btn-sm edit-team_member" data-bs-toggle="modal" data-bs-target="#exampleModal-team_member" mlastname="{{ $team_member->lastname }}" mname="{{ $team_member->name }}" mposition="{{ $team_member->position }}" mdescription="{{ $team_member->description }}" value="{{ route('team_member.update', $team_member) }}" title="Editar"><i class="bi-pen"></i></button>
                                <button type="button" class="btn btn-danger btn-sm swalDefaultSuccess" form="deleteall" formaction="{{ route('team_member.destroy',$team_member) }}" value="Miembro: {{ $team_member->name }}" title="Eliminar"><i class="bi-trash"></i></button>
                            </div>
                        </td>
                    </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
    <div class="card-footer py-3">

    </div>
</div>

<form action="{{ route('team_member.store') }}" method="POST" enctype="multipart/form-data">
    <div class="modal" id="exampleModal-add-team_member" tabindex="-1" aria-labelledby="exampleModalLabel-add-team_member" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-primary">
                    <h1 class="modal-title fs-5 text-light" id="exampleModalLabel"><i class="bi bi-people"></i> Agregar Miembro de equipo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    <div class="mb-3">
                        <label class="form-label"><b>Nombre</b></label>
                        <div class="input-group">
                            <input type="text" name="name" class="form-control" placeholder="Apellidos" required>
                            <input type="text" name="lastname" class="form-control" placeholder="Nombres" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><b>Posición</b></label>
                        <input type="text" name="position" class="form-control" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><b>Foto</b></label>
                        <input type="file" name="photo" class="form-control" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><b>Descripción</b></label>
                        <textarea name="description" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</form>

<form action="" method="POST" enctype="multipart/form-data" id="form-edit-team_member">
    <div class="modal" id="exampleModal-team_member" tabindex="-1" aria-labelledby="exampleModalLabel-team_member" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered modal-lg">
            <div class="modal-content">
                <div class="modal-header bg-info">
                    <h1 class="modal-title fs-5" id="exampleModalLabel"><i class="bi bi-people"></i> Editar Miembro de equipo</h1>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    @csrf
                    @method('PUT')
                    <div class="mb-3">
                        <label class="form-label"><b>Nombre</b></label>
                        <div class="input-group">
                            <input type="text" name="name" class="form-control" placeholder="Apellidos" id="mlastname" required>
                            <input type="text" name="lastname" class="form-control" placeholder="Nombres" id="mname" required>
                        </div>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><b>Posición</b></label>
                        <input type="text" name="position" class="form-control" id="mposition" required>
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><b>Foto</b></label>
                        <input type="file" name="photo" class="form-control" id="mphoto" accept="image/*">
                    </div>
                    <div class="mb-3">
                        <label class="form-label"><b>Descripción</b></label>
                        <textarea name="description" id="mdescription" class="form-control"></textarea>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cancelar</button>
                    <button type="submit" class="btn btn-primary">Guardar</button>
                </div>
            </div>
        </div>
    </div>
</form>