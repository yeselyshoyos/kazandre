<div class="modal fade" id="eliminar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Borrar Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('products.destroy', $row->id) }}" method="post">
                    @csrf
                    @method('delete')
                    <h6>Seguro que desea eliminar la categoria <strong>{{ $row->name }}</strong></h6>
            </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-danger">Borrar</button>
            </div>
            </form>
        </div>
    </div>
</div>
