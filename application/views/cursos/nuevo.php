<div class="text-center">
<h1>NUEVO CURSO</h1>
</div>
<form class=""
action="<?php echo site_url(); ?>/cursos/guardar"
method="post">
    <div class="row">
      <div class="col-md-4">
          <label for="">NOMBRE:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el nombre"
          class="form-control"
          name="nombre_cur" value="" id="nombre_cur">
      </div>
      <div class="col-md-4">
          <label for="">ESPECIALIDAD:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el nombre de la especialidad"
          class="form-control"
          name="especialidad_cur" value="" id="especialidad_cur">
      </div>
      <div class="col-md-4">
        <label for="">JORNADA:</label>
        <br>
        <input type="text"
        placeholder="Ingrese la jornada"
        class="form-control"
        name="horario_cur" value="" id="horario_cur">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-4">
          <label for="">COSTO:</label>
          <br>
          <input type="number"
          placeholder="Ingrese el precio"
          class="form-control"
          name="precio_cur" value="" id="precio_cur">
      </div>
      <div class="col-md-4">
          <label for="">AULA:</label>
          <br>
          <input type="text"
          placeholder="Ingrese el numero de aula"
          class="form-control"
          name="aula_cur" value="" id="aula_cur">
      </div>
    </div>
    <br>
    <div class="row">
        <div class="col-md-12 text-center">
            <button type="submit" name="button"
            class="btn btn-primary">
              Guardar
            </button>
            &nbsp;
            <a href="<?php echo site_url(); ?>/cursos/index"
              class="btn btn-danger">
              Cancelar
            </a>
        </div>
    </div>
</form>
