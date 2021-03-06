@extends('layouts.baseAdmin')
@section('content')
@section('title', 'Usuarios')

<div class="form-group">
    <button type="button" class="btn btn-success btn-icon-split" data-toggle="modal" data-target="#exampleModal">
            <span class="icon text-white-50">
                <i class="fas fa-plus"></i>
            </span>
        <span class="text">Nuevo Usuario</span>
    </button>
    @include('user.create')
</div>
<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable">
                <thead>
                <tr>
                    <th>N°</th>
                    <th>NOMBRE</th>
                    <th># DE DOCUMENTO</th>
                    <th>ROL</th>
                    <th>ACCIONES</th>
                </tr>
                </thead>
                <tbody>
                @foreach ($rows as $row)
                    <tr>
                        <td>{{ $row->id }}</td>
                        <td>{{ $row->name }}</td>
                        <td>{{ $row->docnumber }}</td>
                        <td>{{ $row->role }}</td>
                        <td>
                            <button type="button" class="btn btn-warning btn-circle" data-toggle="modal" data-target="#editar">
                                <i class="fa fa-edit"></i>
                            </button>
                            <button type="button" class="btn btn-danger btn-circle" data-toggle="modal" data-target="#eliminar">
                                <i class="fa fa-trash"></i>
                            </button>
                        </td>
                    </tr>
                    @include('user.edit')
                    @include('user.delete')
                @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@section('js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
    <script>
        @if (session('mensaje'))
        Swal.fire({
            position: 'top-end',
            icon: 'success',
            title: '{{ session('mensaje') }}',
            showConfirmButton: false,
            timer: 1500
        })
        @endif
    </script>
@endsection
