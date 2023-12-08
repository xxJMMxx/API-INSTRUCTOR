@extends('adminlte::page')

@section('title', 'Dashboard')

@section('content_header')
    
@stop

@section('content')
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienvenido al CRUD Instructor</title>

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" integrity="sha384-o2wkvVYX7l1aQGz2Zv33bGO5F3bY+eNYxqwa1b7CB5U52ewjo22BKZQ/xzmaN1F2" crossorigin="anonymous">

   
</head>
<body>
  
    
    <div style="text-align: center; margin-top: 50px;">
        <h1>Bienvenido</h1>
        <h1> Tecnológico Nacional de México</h1>
        <h2>Instituto Tecnológico de Cd. Altamirano</h2>
        <p>CRUD Instructor</p>
        <p>¡Desarrollo y gestion de los instructores de manera eficiente!</p>
        
    </div>

    <a href="{{ route('instructors.create') }}" class="btn btn-primary">
        <i class="fas fa-chalkboard-teacher"></i> Agregar Instructor
    </a>
    
</body>
</html>

@stop

@section('css')
    <link rel="stylesheet" href="/css/admin_custom.css">
@stop

@section('js')
    <script> console.log('Hi!'); </script>
@stop