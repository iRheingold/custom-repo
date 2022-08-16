@extends('layouts.app')
@section('content')
<h2 class="container">Formulario creación de empleado</h2>
<form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data" class="container">
    @csrf
    @include('empleado.form')
</form>
@endsection
