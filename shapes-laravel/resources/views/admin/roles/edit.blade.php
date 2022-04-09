@extends('adminlte::page')

@section('title', 'Editar roles')
@section('plugins.Sweetalert2')
@section('content')
    <h1>Editar roles.</h1>
    @if (session('info'))
        <div class="alert alert-success">
            {{session('info') }}
        </div>
    @endif
<div class="card">
    <div class="card-body">
        {!! Form::model($role, ['route' => ['admin.roles.update',$role], 'method' => 'put']) !!}
        @include('admin.roles.partials.form')

        {!! Form::submit('Actualizar Role',['class'=>'btn btn-primary']) !!}

        {!! Form::close() !!}
    </div>
</div>
@stop
