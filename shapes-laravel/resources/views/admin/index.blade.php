@extends('adminlte::page')

@section('title', 'Administrador')
@section('plugins.Sweetalert2')
@section('content')
    <p>Welcome to this beautiful admin panel.</p>

@stop

{{-- @section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop --}}

@section('js')
    <script>
        Swal.fire({
            title: 'Bienvenido',
            showClass: {
                popup: 'animate__animated animate__fadeInDown'
            },
            hideClass: {
                popup: 'animate__animated animate__fadeOutUp'
            }
        })
    </script>
@stop
