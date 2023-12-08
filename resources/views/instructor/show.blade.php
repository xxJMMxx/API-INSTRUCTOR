@extends('adminlte::page')

@section('title', '(SHOW)Detalles del perfil instructor')

@section('content_header')
    <h1 class="text-center mb-4">Detalles instrucotor</h1>
@stop

@section('content')
<div class="row justify-content-center align-items-center" style="height: 80vh;">
    <div class="col-md-6">
        <div class="card border border-dark d-flex flex-column h-100" style="border-color: #000;">
            <div class="card-header">
                <h5 class="card-title text-center">Información del perfil del instructor</h5>
            </div>
            <div class="card-body">
                <ul class="list-group list-group-flush">
                    <li class="list-group-item border" style="border-color: #000;"><strong>Nombre:</strong> {{ $instructor->name }}</li>
                    <li class="list-group-item border" style="border-color: #000;"><strong>Apellido:</strong> {{ $instructor->lastname }}</li>
                    <li class="list-group-item border" style="border-color: #000;"><strong>Formacion:</strong> {{ $instructor->education }}</li>
                    <li class="list-group-item border" style="border-color: #000;"><strong>rfc:</strong> {{ $instructor->rfc }}</li>
                    <li class="list-group-item border" style="border-color: #000;"><strong>sex:</strong> {{ $instructor->sex }}</li>
                </ul>
            </div>
            <div class="card-footer">
                <a href="{{ route('instructors.index') }}" class="btn btn-primary">Regresar a la lista</a>
            </div>
        </div>
    </div>
</div>

@stop

@section('css')
    <link rel="stylesheet" href="">
@stop