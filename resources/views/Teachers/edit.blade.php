@extends('Template.Template');
@section('plantillaweb')
  <h2>Editar de profesores</h2>
<form action="{{route('profesores.update',$teacher->id)}}" method="post">
    <!-- csrf_field es un metodo de autenticacion token -->
    @method('PUT')
    {{ csrf_field() }}

    <div class="container">
        <div class="row">

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Nombres: </label>
            <input type="text" name="nombres" required value="{{$teacher->tnombre;}}">
          </div>
          <div class="row">

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Apellidos: </label>
            <input type="text" name="apellidos" required value="{{$teacher->tapellido;}}">
          </div>
          <div class="row">

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Direccion: </label>
            <input type="text" name="direccion" required value="{{$teacher->tdireccion;}}">
          </div>
          <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="correo" required value="{{$teacher->tcorreo;}}">
            {{-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --}}
          </div>
          <div class="row">

            <div class="col-lg-6 col-md-4 col-sm-2">
            <label for="">Telefono: </label>
            <input type="number" name="telefono" maxlength="9" required value="{{$teacher->ttelefono;}}">
          </div>
         <hr>
    <select class="form-select"  aria-label="Default select example" name="nivel" required value="{{$teacher->tnivel_academico;}}">
        <option disabled>Nivel Academico</option>
        <option value="1" >Bachiller</option>
        <option value="2">Tecnico</option>
        <option value="3">Tecnologo</option>
        <option value="4">Profesional</option>
        <option value="5">Magister</option>
        <option value="6">Doctorado</option>
      </select>
      <hr>
    <button type="submit" class="btn btn-primary">Actualizar</button>
  </form>

@endsection
