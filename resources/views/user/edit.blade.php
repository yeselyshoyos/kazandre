<div class="modal fade" id="editar" data-keyboard="false" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Editar Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('users.update', $row->id) }}" method="POST">
                    @csrf
                    @method('put')
                    <div class="row">
                        <div class="col">
                            <label for="">Nombres</label>
                            <input type="text" class="form-control" placeholder="Nombres" name="name" value="{{ $row->name }}">
                            @error('name')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="">Apellidos</label>
                            <input type="text" class="form-control" placeholder="Apellidos" name="lastname" value="{{ $row->lastname }}">
                            @error('lastname')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="">Tipo de Documento</label>
                            <select name="doctypessss_id" id="" class="form-control">
                                <option value=""></option>
                                @foreach ($doctype as $item)
                                    <option value="{{ $item->id }}">{{ $item->name }}</option>
                                @endforeach
                            </select>
                            @error('doctypessss_id')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="">Numero de Documento</label>
                            <input type="number" class="form-control" placeholder="Numero de Documento" name="docnumber" value="{{ $row->docnumber }}">
                            @error('docnumber')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="">Fecha de Nacimiento</label>
                            <input type="date" class="form-control" name="birthday" value="{{ $row->birthday }}">
                            @error('birthday')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="">Celular</label>
                            <input type="number" class="form-control" placeholder="Numero de Celular" name="telephone" value="{{ $row->telephone }}">
                            @error('telephone')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-6">
                            <label for="email">Correo Electrónico</label>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $row->email }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
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
