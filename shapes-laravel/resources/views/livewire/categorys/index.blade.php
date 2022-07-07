@extends('adminlte::page')

@section('title', 'Category')

@section('content')
<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-md-12">
            @livewire('categorys')
        </div>     
    </div>   
</div>
@endsection