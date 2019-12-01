@extends("plantilla")
@section("modulo")Editar @endsection
@section("contenido")
<form method="POST" action="{{route("alumnos.update", $alumnos[0]->id)}}">
    @method('PATCH')
    {{csrf_field()}}
<div class="row">
    <div class="col-md-3">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
           <span class="input-group-text" id="basic-addon1"><i class="fas fa-university"></i></span>
         </div>
            <input value="{{$alumnos[0]->nombreA}}" maxlength="25" required type="text" id="nombre" name="nombre" class="form-control" placeholder="Nombre" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
           <span class="input-group-text" id="basic-addon1"><i class="fas fa-phone-square-alt"></i></span>
         </div>
            <input value="{{$alumnos[0]->apeP}}" maxlength="10" required type="text" id="telefono" name="apellido" class="form-control" placeholder="Apellido" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
           <span class="input-group-text" id="basic-addon1"><i class="fas fa-barcode"></i></span>
         </div>
            <input value="{{$alumnos[0]->grado}}" maxlength="10" required  type="text"  id="grado" name="grado" class="form-control" placeholder="Grado" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    </div>
</div>
<div class="row">
    <div class="col-md-3">
        <div class="input-group mb-3">
          <div class="input-group-prepend">
           <span class="input-group-text" id="basic-addon1"><i class="fas fa-barcode"></i></span>
         </div>
            <input value="{{$alumnos[0]->carrera}}" maxlength="10" required  type="text"  id="carrera" name="carrera" class="form-control" placeholder="Carrera" aria-label="Username" aria-describedby="basic-addon1">
    </div>
    </div>
</div>
    
    <div> <button class="btn btn-success">Guardar</button> </div>
        </form>
@endsection
