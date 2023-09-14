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

@section('css')
    {{-- Styles para volver el datatable responsive --}}
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.bootstrap4.min.css">
@stop

@section('js')
    {{-- Scripts para volver el datatable responsive --}}
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/responsive.bootstrap4.min.js"></script>

    <script>
        // Configuraciones adicionales
        const options = {
            responsive: true,
            autoWidth: false
        };

        // Crear un objeto datatable
        const datatable = new DataTable('#usuarios', options);
    </script>
@stop
