<div class="modal fade" id="exampleModal" data-keyboard="false" data-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-xl">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Nuevo Usuario</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <div class="row">
                        <div class="col">
                            <label for="">Nombres</label> <sup class="text-danger h6"><strong>*</strong></sup>
                            <input type="text" class="form-control" placeholder="Nombres" name="name" value="{{ old('name') }}">
                            @error('name')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="">Apellidos</label> <sup class="text-danger h6"><strong>*</strong></sup>
                            <input type="text" class="form-control" placeholder="Apellidos" name="lastname" value="{{ old('lastname') }}">
                            @error('lastname')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>

                    <div class="row">
                        <div class="col">
                            <label for="">Tipo de Documento</label> <sup class="text-danger h6"><strong>*</strong></sup>
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
                            <label for="">Numero de Documento</label> <sup class="text-danger h6"><strong>*</strong></sup>
                            <input type="number" class="form-control" placeholder="Numero de Documento" name="docnumber" value="{{ old('docnumber') }}">
                            @error('docnumber')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="">Fecha de Nacimiento</label> <sup class="text-danger h6"><strong>*</strong></sup>
                            <input type="date" class="form-control" name="birthday" value="{{ old('birthday') }}">
                            @error('birthday')
                            <span class="text-danger" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                        </div>
                        <div class="col">
                            <label for="">Celular</label> <sup class="text-danger h6"><strong>*</strong></sup>
                            <input type="number" class="form-control" placeholder="Numero de Celular" name="telephone" value="{{ old('telephone') }}">
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
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                    </div>
                    <div class="row">
                        <div class="col">
                            <label for="password">Contraseña</label>
                            <input id="password" type="password" class="form-control password1 @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">
                            <span class="fa fa-fw fa-eye password-icon show-password"></span>
                            @error('password')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="col">
                            <label for="password-confirm">Confirmar Contraseña</label>
                            <input id="password-confirm" type="password" class="form-control password2" name="password_confirmation" required autocomplete="new-password">
                        </div>
                    </div>
                </div>
            <div class="modal-footer">
                <button type="submit" class="btn btn-primary">Crear</button>
            </div>
            </form>
        </div>
    </div>
</div>
