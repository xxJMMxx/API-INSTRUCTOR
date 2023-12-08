@extends('adminlte::page')

@section('title', 'Create')

@section('content_header')
    
@stop

@section('content')
<body>
    <div class="container mb-12">
        <h1 class="text-center">Agregar un instructor</h1>

        <form action="{{ route('instructors.store') }}" method="POST">
            @csrf
            
            <div class="mb-3">
                <label for="Nombre" class="form-label">Nombre</label>
                <input type="text" class="form-control"  name="name" placeholder="Ingrese nombre">
            </div>
            <div class="mb-3">
                <label for="apellidos" class="form-label">apellidos</label>
                <input type="text" class="form-control"  name="lastname" placeholder="Ingrese apellidos">
            </div>
            <div class="mb-3">
                <label for="educacion" class="form-label">Formacion</label>
                <input type="text" class="form-control"  name="education" placeholder="Ingrese su Formacion">
            </div>
            <div class="mb-3">
                <label for="rfc" class="form-label">rfc</label>
                <input type="text" class="form-control"  name="rfc" placeholder="Ingrese se rfc">
            </div>
            <div class="mb-3">
                <label for="sex" class="form-label">sexo</label>
                <select class="form-select"  name="sex">
                    <option value="activo">masculino</option>
                    <option value="inactivo">femenino</option>
                </select>
            </div>
            <button type="submit" class="btn btn-success">Agregar</button>
        </form>
    </div>
</body>
@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop