@extends('adminlte::page')

@section('title', 'Detalles')

@section('content')
    
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('details')
        </div>     
    </div>   
</div>
@stop
