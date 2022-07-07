@extends('adminlte::page')

@section('title', 'Product')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('products')
        </div>     
    </div>   
</div>
@endsection