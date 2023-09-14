@extends('adminlte::page')

@section('title', 'Usuarios')

@section('plugins.Datatables', true)

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')
    <div class="card">
        <div class="card-body">
            {{-- La tabla deeb tener un id para que datatable lo pueda llamar --}}
            <table class="table table-striped table-bordered" id="usuarios">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Correo</th>
                        <th scope="col">Incorporación</th>
                    </tr>
                </thead>

                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>

                            {{-- Método de la clase Carbon que formatea diferencias de fechas --}}
                            <td>{{ $user->created_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
@stop

@section('js')
    <script>
        // Crear un objeto datatable
        const datatable = new DataTable('#usuarios');
    </script>
@stop
