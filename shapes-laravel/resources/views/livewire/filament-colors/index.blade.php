@extends('adminlte::page')

@section('title', 'Color de Filamentos')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('filament-colors')

           
        </div>     
    </div>   
</div>
@stop