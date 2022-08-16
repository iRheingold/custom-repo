@extends('layouts.app')
@section('content')
<h2>Formulario creación de empleado</h2>
<form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data" class="mb-3">
    @csrf
    <label for="nombre" class="form-label">Nombre
        <input  type="text" name="nombre" class="form-control" id="nombre" aria-describedby="emailHelp">
    </label>
    <br>
    <label for="apellidop">apellidop
        <input type="text" name="apellidop" id="apellidop">
    </label>
    <br>
    <label for="apellidom">apellidom
        <input type="text" name="apellidom" id="apellidom">
    </label>
    <br>
    <label for="email">email
        <input type="email" name="email" id="email">
    </label>
    <br>
    <label for="foto">foto
        <input type="file" name="foto" id="foto">
    </label>
    <br>
    <input type="submit" value="Enviar" class="btn btn-primary">
</form>
@endsection
