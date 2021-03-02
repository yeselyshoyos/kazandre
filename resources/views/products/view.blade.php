<div class="modal fade" id="ver" data-keyboard="false" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Vista del producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col">
                        <label for="">Nombre</label>
                        <input type="text" class="form-control" value="{{ $row->name }}" readonly>
                    </div>
                    <div class="col">
                        <label for="">Descripción</label>
                        <input type="text" class="form-control" value="{{ $row->description }}" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col">
                        <label for="">Precio</label>
                        <input type="number" class="form-control" value="{{ $row->price }}" readonly>
                    </div>
                    <div class="col">
                        <label for="">Categoria</label>
                        <input type="text" class="form-control" value="{{ $row->nameCategory }}" readonly>
                    </div>
                </div>
                <div class="row">
                    <div class="col-6">
                        <label for="">Cantidad</label>
                        <input type="number" class="form-control" value="{{ $row->stock }}" readonly>
                    </div>
                </div>
                <br>
                <div class="row">
                    <div class="col-4">
                        <img src="{{ asset($row->img1) }}" width="200" height="200">
                    </div>
                    <div class="col-4">

                        @if ($row->img2 == null)
                            <img src="{{ asset('img/noimage.png') }}" width="200" height="200">
                        @else
                            <img src="{{ asset($row->img2) }}" width="200" height="200">
                        @endif
                    </div>
                    <div class="col-4">
                        @if ($row->img3 == null)
                            <img src="{{ asset('img/noimage.png') }}" width="200" height="200">
                        @else
                            <img src="{{ asset($row->img3) }}" width="200" height="200">
                        @endif

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
