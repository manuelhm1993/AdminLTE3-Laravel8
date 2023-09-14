@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    <h1>MHenriquez</h1>
@stop

@section('content')
    @for ($i = 0; $i < 10; $i++)
        <div class="card">
            <div class="card-header">
                <h1 class="card-title">Hola mundo</h1>
            </div>

            <div class="card-body">
                <p>
                    Lorem, ipsum dolor sit amet consectetur adipisicing elit. Fugiat odit debitis aliquid nemo, voluptas ipsam ea
                    praesentium pariatur nostrum accusamus voluptates fuga. Minus culpa, provident consequatur laudantium fuga
                    sapiente exercitationem.
                </p>
            </div>
        </div>
    @endfor
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop
