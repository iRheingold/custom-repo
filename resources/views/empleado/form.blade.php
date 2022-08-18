@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>
@endsection
@if(count($errors)>0)
    @foreach($errors->all() as $error)
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Error!</strong> {{$error}}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
    @endforeach
@endif
<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input  type="text" name="nombre" class="form-control" id="nombre" value="{{isset($empleado->nombre)? $empleado->nombre : ''}}" aria-describedby="emailHelp">
</div>
<div class="mb-3">
    <label for="apellidop">Apellido Paterno</label>
    <input type="text" name="apellidop" id="apellidop" value="{{isset($empleado->apellidop)? $empleado->apellidop : ''}}" class="form-control">
</div>
<div class="mb-3">
    <label for="apellidom">Apellido Materno</label>
    <input type="text" name="apellidom" id="apellidom"  value="{{isset($empleado->apellidom) ? $empleado->apellidom : ''}}" class="form-control">
</div>
<div class="mb-3">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="{{isset($empleado->email) ? $empleado->email : ''}}" class="form-control">
</div>
<div class="mb-3">
    <label for="foto">Foto</label><br>
    @if(isset($empleado->foto))
    <img src="{{ asset('storage').'/'.$empleado->foto }}" width="100" alt="">
    @endif
        <input type="file" name="foto" id="foto" value="" class="form-control">
</div>
<button type="submit" class="btn btn-primary">Enviar</button>
<a href="{{ url('empleado/') }}" class="btn btn-success">Regresar</a>
