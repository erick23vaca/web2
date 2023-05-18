<h1>NUEVO INSTRUCTOR</h1>
<form class="" action="OJO" method="post">
  <div class="row">
    <div class="col-md-4">
      <label for="">Cédula:</label>
      <br>
      <input type="number"placeholder="Ingrese la cédula" class="form-control" name="cedula_ins" value="">
    </div>
    <div class="col-md-4">
      <label for="">Primer Apellido:</label>
      <br>
      <input type="text"placeholder="Ingrese el primer apellido" class="form-control" name="primer_apellido_ins" value="">
    </div>
    <div class="col-md-4">
      <label for="">Segundo Apellido:</label>
      <br>
      <input type="text"placeholder="Ingrese el segundo apellido" class="form-control" name="segundo_apellido_ins" value="">
    </div>
    <div class="col-md-4">
      <label for="">Nombres:</label>
      <br>
      <input type="text"placeholder="Ingrese los dos nombres" class="form-control" name="nombres_ins" value="">
    </div>
    <div class="col-md-4">
      <label for="">Titulo:</label>
      <br>
      <input type="text"placeholder="Ingrese el titulo" class="form-control" name="titulo_ins" value="">
    </div>
    <div class="col-md-4">
      <label for="">Telefono:</label>
      <br>
      <input type="number"placeholder="Ingrese el segundo apellido" class="form-control" name="telefono_ins" value="">
    </div>
    <div class="col-md-12">
      <label for="">Direccion:</label>
      <br>
      <input type="text"placeholder="Ingrese la direccion" class="form-control" name="direccion_ins" value="">
    </div>
    <br>

  </div>
  <br>
  <br>
  <center>
  <div class="col-md-12 txt-center">
    <button type="submit" name="button"
    class="btn btn-primary">Guardar</button>
    <a href="<?php echo site_url(); ?>/instructores/index" class="btn btn-danger">cancelar</a>
  </center>
  </div>
</form>
