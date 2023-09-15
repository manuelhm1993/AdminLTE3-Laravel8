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

                {{-- diffForHumans permite mostrar la diferencia de fecha y hora formateadas fácilmente --}}
                {{-- <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{ $user->id }}</th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->created_at->diffForHumans() }}</td>
                        </tr>
                    @endforeach
                </tbody> --}}
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
            autoWidth: false,
            language: {
                // url: '//cdn.datatables.net/plug-ins/1.13.6/i18n/es-ES.json', // Plugin para traducción automática
                info: 'Mostrando la página _PAGE_ de _PAGES_',
                infoEmpty: 'No hay registros disponibles',
                infoFiltered: '(filtrado de _MAX_ registros totales)',
                lengthMenu: 'Mostrar ' + `
                <select class="custom-select custom-select-sm form-control form-control-sm">
                    <option value="10">10</option>
                    <option value="25">25</option>
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="-1">Todos</option>
                </select>
                ` + ' registros por página',
                zeroRecords: 'No hay coincidencias - lo sentimos',
                search: 'Buscar:',
                paginate: {
                    next: 'Siguiente',
                    previous: 'Anterior'
                }
            },
            ajax: "{{ route('api.admin.datatables.users') }}",
            columns: [
                {data: 'id'},
                {data: 'name'},
                {data: 'email'},
                {data: 'created_at'},
            ]
        };

        // Crear un objeto datatable
        const datatable = new DataTable('#usuarios', options);
    </script>
@stop
