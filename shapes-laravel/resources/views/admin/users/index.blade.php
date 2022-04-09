@extends('adminlte::page')

@section('title', 'Administrador')
@section('plugins.Sweetalert2')
@section('content')
    <h1>Lista de Usuarios.</h1>
    @livewire('admin.users-index')
@stop


