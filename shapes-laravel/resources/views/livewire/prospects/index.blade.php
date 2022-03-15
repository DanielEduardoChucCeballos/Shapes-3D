@extends('adminlte::page')

@section('title', 'Potenciales Clientes')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('prospects')
        </div>     
    </div>   
</div>
@stop