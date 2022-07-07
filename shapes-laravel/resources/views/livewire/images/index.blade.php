@extends('adminlte::page')

@section('title', 'Images')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('images')
        </div>     
    </div>   
</div>
@endsection