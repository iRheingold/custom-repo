@extends('layouts.app')
@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.12.1/css/dataTables.bootstrap5.min.css">
@endsection
@section('content')
<h1 class="text-center">Empleados List</h1>
<div class="card">
    <div class="card-body">
        <table id="empleados" class="table table-striped table-hover" style="width:100%">
            <thead>
                <tr>
                    <th>#ID</th>
                    <th>Foto</th>
                    <th>Nombre</th>
                    <th>Apellido Paterno</th>
                    <th>Apellido Materno</th>
                    <th>Email</th>
                    <th>Acciones</th>
                </tr>
            </thead>
            <tbody>
            @foreach($empleados as $empleado)
             <tr>
                 <td>{{$empleado->id}}</td>
                 <td>
                     <img src="{{ asset('storage').'/'.$empleado->foto }}" alt="">
                     {{$empleado->foto}}</td>
                 <td>{{$empleado->nombre}}</td>
                 <td>{{$empleado->apellidop}}</td>
                 <td>{{$empleado->apellidom}}</td>
                 <td>{{$empleado->email}}</td>
                 <td class="d-flex justify-content-center">
                     <a href="{{url('/empleado/'.$empleado->id.'/edit/')}}" class="btn btn-secondary mx-2">Editar</a>
                     <form action="{{ url('/empleado/'.$empleado->id)}}" method="post">
                         @csrf
                         {{method_field('DELETE')}}
                         <input type="submit" onclick="return confirm('¿Quieres Eliminar?')" value="Destroy" class="btn btn-danger">
                     </form>
                 </td>
             </tr>
            @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection

@section('js')
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function () {
            $('#empleados').DataTable();
        });
    </script>
@endsection
