@extends('adminlte::page')

@section('title', 'Editar Inscripción')

@section('content_header')
@stop

@section('content')
<form method="post" action="{{ route('instructors.update', $instructor) }}">
    @method("PUT")
    @csrf

    
    </div>
    
    <div class="form-group">
        <label for="start_date">Nombre</label>
        <input type="text" name="name" id="name" class="form-control" value="{{ $instructor->name }}">
    </div>

    <div class="form-group">
        <label for="start_date">Apellidos</label>
        <input type="text" name="lastname" id="lastname" class="form-control" value="{{ $instructor->lastname }}">
    </div>

    <div class="form-group">
        <label for="start_date">Formacion</label>
        <input type="text" name="education" id="education" class="form-control" value="{{ $instructor->education }}">
    </div>


    <div class="form-group">
        <label for="final_date">RFC</label>
        <input type="text" name="rfc" id="rfc" class="form-control" value="{{ $instructor->rfc }}">
    </div>

    <div class="form-group">
       <label for="Estatus" class="form-label">Sexo</label>
                <select class="form-select"  name="sex">
                    <option value="Masculino">Masculino</option>
                    <option value="Femenino">Femenino</option>
                </select>
     
    </div>

    <button type="submit" class="btn btn-primary">Guardar cambios</button>
</form>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop