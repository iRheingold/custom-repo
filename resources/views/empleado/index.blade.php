@extends('layouts.app')
@section('content')
    <h1 class="text-center">Empleados List</h1>
    <div class="card">
        <div class="card-body">
            <a href="{{url('empleado/create')}} " class="btn btn-success mb-2" >Crear empleado</a>
            <div class="responsive">
                <table id="empleados" class="table table-striped table-hover ">
                    <thead>
                        <tr>
                            <th scope="col">#ID</th>
                            <th scope="col">Foto</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Apellido Paterno</th>
                            <th scope="col">Apellido Materno</th>
                            <th scope="col">Email</th>
                            <th scope="col">Acciones</th>
                        </tr>
                    </thead>
                    <tbody>
                    @foreach($empleados as $empleado)
                     <tr>
                         <td>{{$empleado->id}}</td>
                         <td><img src="{{ asset('storage').'/'.$empleado->foto }}"class="img-thumbnail img-fluid" width="70" alt=""></td>
                         <td>{{$empleado->nombre}}</td>
                         <td>{{$empleado->apellidop}}</td>
                         <td>{{$empleado->apellidom}}</td>
                         <td>{{$empleado->email}}</td>
                         <td class="d-flex justify-content-center p-4">
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
    </div>
@endsection
@section('js')
    <script>
        $(document).ready(function () {
            $('#empleados').DataTable();
        });
    </script>
@endsection
