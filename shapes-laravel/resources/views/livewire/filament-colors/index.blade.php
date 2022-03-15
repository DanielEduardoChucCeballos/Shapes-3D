@extends('adminlte::page')

@section('title', 'Color de Filamentos')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('filament-colors')

            <h1 class="bg-danger"> Reparar, traer los ID y nombres con select</h1>
        </div>     
    </div>   
</div>
@stop