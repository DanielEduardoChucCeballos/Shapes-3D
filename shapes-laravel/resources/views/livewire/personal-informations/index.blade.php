@extends('adminlte::page')

@section('title', 'Información Personal')

@section('content')
<div class="container-fluid py-4">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('personal-informations')
        </div>     
    </div>   
</div>
@stop