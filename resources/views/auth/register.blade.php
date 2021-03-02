@extends('layouts.baseprincipal')
@section('title', 'Registrarse')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <h1 class="text-center">Crea tu cuenta</h1>
            <div class="card shadow-lg border-0">


                <div class="card-body" style="background-color: whitesmoke"">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group">
                            <label for="name">Nombres</label> <sup class="text-danger h6"><strong>*</strong></sup>
                            <input id="name" type="text" class="form-control @error('password') is-invalid @enderror text-capitalize" name="name" value="{{ old('name') }}" required autocomplete="name">
                                @error('name')
                                <span class="text-danger" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror

                        </div>
                        <div class="form-group">
                            <label for="lastname">Apellidos</label> <sup class="text-danger h6"><strong>*</strong></sup>
                            <input type="text" class="form-control text-capitalize" name="lastname" value="{{ old('lastname') }}" required autofocus>

                            @error('lastname')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Tipo de Documento</label> <sup class="text-danger h6"><strong>*</strong></sup>
                            <select name="doctypessss_id" id="" class="form-control @error('doctypessss_id') is-invalid @enderror">
                                <option value=""></option>
                                @foreach ($typeDocument as $row)
                                    <option value="{{$row->id}}">{{ $row->name }}</option>
                                @endforeach
                            </select>
                            @error('doctypessss_id')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Numero de Documento</label> <sup class="text-danger h6"><strong>*</strong></sup>
                            <input type="number" class="form-control @error('docnumber') is-invalid @enderror" name="docnumber" value="{{ old('docnumber') }}" required autofocus>

                            @error('docnumber')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Fecha de Nacimento</label> <sup class="text-danger h6"><strong>*</strong></sup>
                            <input type="date" class="form-control @error('birthday') is-invalid @enderror" name="birthday" value="{{ old('birthday') }}"  required autofocus>

                            @error('birthday')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Telefono</label>
                            <input type="number" class="form-control" name="telephone" value="{{ old('telephone') }}" autofocus>
                            @error('telephone')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Celular</label> <sup class="text-danger h6"><strong>*</strong></sup>
                            <input type="number" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ old('phone') }}" required autofocus>
                            @error('phone')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label for="">Nombre de Usuario</label> <sup class="text-danger h6"><strong>*</strong></sup>
                            <input type="text" class="form-control @error('username') is-invalid @enderror" name="username" value="{{ old('username') }}" required autofocus>
                            @error('username')
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="email">{{ __('E-Mail Address') }} </label> <sup class="text-danger h6"><strong>*</strong></sup>
                            <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password">{{ __('Password') }}</label> <sup class="text-danger h6"><strong>*</strong></sup>
                            <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label for="password-confirm" >{{ __('Confirm Password') }}</label> <sup class="text-danger h6"><strong>*</strong></sup>
                            <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required autocomplete="new-password">
                        </div>
                        <br>

                        <p class="text-muted"> todos los campos con (<strong class="text-danger">*</strong>) son obligatorios.</p>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
