@extends('layouts.app')
@section('content')
    <div class="container">
        <h2 class="text-center">Editar empleado</h2>
        <div class="card">
        <div class="card-body">
            <form action="{{ url('/empleado/'.$empleado->id) }}" method="post" enctype="multipart/form-data">
                @csrf
            {{method_field('PATCH')}}
            @include('empleado.form')
            </form>
        </div>
    </div>
    </div>
@endsection
