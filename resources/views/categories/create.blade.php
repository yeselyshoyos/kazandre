<div class="modal fade" id="exampleModal" data-keyboard="false" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nueva Categoria</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('categories.store') }}" id="form" name="form" method="POST">
                    @csrf
                    <div class="form-group">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" placeholder="Nombre" id="name" name="name" required>
                        @error('name')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="form-group">
                        <label for="">Descripción</label>
                        <input type="text" class="form-control" placeholder="Descripción" id="description" name="description" required>
                        @error('description')
                        <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
            </form>
        </div>
    </div>
</div>
