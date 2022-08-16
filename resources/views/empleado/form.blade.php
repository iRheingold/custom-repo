<div class="mb-3">
    <label for="nombre" class="form-label">Nombre</label>
    <input  type="text" name="nombre" class="form-control" id="nombre" value="{{$empleado->nombre}}" aria-describedby="emailHelp">
</div>
<div class="mb-3">
    <label for="apellidop">Apellido Paterno</label>
    <input type="text" name="apellidop" id="apellidop" value="{{$empleado->apellidop}}" class="form-control">
</div>
<div class="mb-3">
    <label for="apellidom">Apellido Materno</label>
    <input type="text" name="apellidom" id="apellidom"  value="{{$empleado->apellidom}}" class="form-control">
</div>
<div class="mb-3">
    <label for="email">Email</label>
    <input type="email" name="email" id="email" value="{{$empleado->email}}" class="form-control">
</div>
<div class="mb-3">
    <label for="foto">Foto</label>
    {{$empleado->foto}}
    <input type="file" name="foto" id="foto" value="" class="form-control">
</div>
<button type="submit" class="btn btn-primary">Enviar</button>
