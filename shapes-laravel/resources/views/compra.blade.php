@extends('layouts.app')
@section('title', 'Proceso de compra')
@section('content')

@isset($prospect)
    {{ $prospect->id }}
@endisset
@endsection

