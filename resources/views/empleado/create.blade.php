@extends('layouts.app')
@section('content')
<h2 class="container">Formulario creación de empleado</h2>
<form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data" class="container">
    @csrf
    <div class="mb-3">
    <label for="nombre" class="form-label">Nombre
    </label>
        <input  type="text" name="nombre" class="form-control" id="nombre" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
    <label for="apellidop">Apellido Paterno
    </label>
        <input type="text" name="apellidop" id="apellidop" class="form-control">
    </div>
    <label for="apellidom">Apellido Materno
    </label>
    <input type="text" name="apellidom" id="apellidom" class="form-control">
    <div class="mb-3">
    <label for="email">Email
    </label>
        <input type="email" name="email" id="email" class="form-control">
    </div>
    <div class="mb-3">
    <label for="foto">Foto
    </label>
        <input type="file" name="foto" id="foto" class="form-control">
    </div>
    <button type="submit" class="btn btn-primary">Enviar</button>
</form>
@endsection
