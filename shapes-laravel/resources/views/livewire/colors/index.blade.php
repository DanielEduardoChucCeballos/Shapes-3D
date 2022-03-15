@extends('adminlte::page')

@section('title', 'Colores')

@section('content')
    
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('colors')
        </div>     
    </div>   
</div>
@stop