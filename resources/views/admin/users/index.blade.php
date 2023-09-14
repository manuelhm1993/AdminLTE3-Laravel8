@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>Usuarios</h1>
@stop

@section('content')
    @for ($i = 0; $i < 10; $i++)
        <div class="card">
            <div class="card-body">
                <table class="table table-striped">
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
                                <td>{{ App\MH\Clases\Helper::getDateDiffToString($user->created_at, 'now') }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endfor
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
