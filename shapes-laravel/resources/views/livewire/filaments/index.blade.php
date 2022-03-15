@extends('adminlte::page')

@section('title', 'Filamentos')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('filaments')
        </div>     
    </div>   
</div>
@stop