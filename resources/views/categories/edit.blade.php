<!-- Modal -->
<div class="modal fade" id="editar<?=$num?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('categories.update', $row->id) }}" id="form" name="form" method="POST" onsubmit="return validar()">
                    @csrf
                    @method('put')
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre" onkeypress="return valida(event)" name="name" id="name" value="{{ $row->name }}">
                        @error('name')
                        <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Descripción</label>
                        <input type="text" class="form-control" placeholder="Descripción"  onkeypress="return valida(event)" id="name" name="description"
                               value="{{ $row->description }}">
                        @error('description')
                        <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Editar</button>
            </div>
            </form>
        </div>
    </div>
</div>
