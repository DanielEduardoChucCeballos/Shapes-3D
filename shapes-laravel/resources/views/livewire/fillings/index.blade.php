@extends('adminlte::page')

@section('title', 'Relleno')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('fillings')
        </div>     
    </div>   
</div>
@stop