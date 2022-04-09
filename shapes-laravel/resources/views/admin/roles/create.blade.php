@extends('adminlte::page')

@section('title', 'Crear roles')
@section('plugins.Sweetalert2')
@section('content')
    <h1>Crear roles.</h1>
<div class="card">
    <div class="card-body">
        {!! Form::open(['route' => 'admin.roles.store'])!!}
        @csrf
        @include('admin.roles.partials.form');
        
        {!! Form::submit('Crear Rol',['class'=>'btn btn-primary']) !!}
        {!! Form::close() !!}
    </div>
</div>
@stop
