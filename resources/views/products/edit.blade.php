<div class="modal fade" id="editar" data-keyboard="false" data-backdrop="static" tabindex="-1"
     aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Producto</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('products.update', $row->id) }}" method="POST" enctype="multipart/form-data">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col">
                            <label for="">Nombre</label>
                            <input type="text" class="form-control" placeholder="Nombre" name="name" value="{{ $row->name }}">
                            @error('name')
                            <span class="text-danger" role="alert">
                                <strong>El campo ya se encuentra o esta vacio.</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="">Descripción</label>
                            <input type="text" class="form-control" placeholder="Descripción" name="description" value="{{ $row->description }}">
                            @error('description')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="">Precio</label>
                            <input type="number" class="form-control" name="price" value="{{ $row->price }}">
                            @error('price')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="">Categoria</label>
                            <select name="id_category" id="" class="form-control">
                                <option value=""></option>
                                @foreach ($categorias as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('id_category')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="">Cantidad</label>
                            <input type="number" class="form-control" name="stock" value="{{ $row->stock }}">
                            @error('stock')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col">
                            <div class="mb-3">
                                <label for="">Imagen</label>
                                <input type="file" class="form-control" accept="image/*" name="img" required>
                            </div>
                            @error('img')
                            <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            <span class="text-danger">Solo formato <strong>JPG, JPEG, PNG</strong>. La imagen debe pesar como maximo <strong>2MB</strong></span>
                        </div>
                    </div>

            </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-primary">Editar</button>
                </div>
            </form>
        </div>
    </div>
</div>

