@extends('layouts.app')
@section('content')
<h2 class="text-center fs-2">Formulario creación de empleado</h2>
<form action="{{url('/empleado')}}" method="post" enctype="multipart/form-data" class="container">
    @csrf
    @include('empleado.form')
</form>
@endsection
