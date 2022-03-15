@extends('adminlte::page')

@section('title', 'Acabado')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('finishs')
        </div>     
    </div>   
</div>
@stop