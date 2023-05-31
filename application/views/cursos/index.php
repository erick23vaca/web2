<div class="text-center">
  <h1>LISTADO DE CURSOS</h1>
</div>
<br>
<?php if ($cursos): ?>
  <!-- table-hoverpara que el pulsor se marque -->
<table class="table table-striped table-bordered table-hover">
  <thead>
    <tr>
      <th>ID</th>
      <th>NOMBRES</th>
      <th>ESPECIALIDAD</th>
      <th>HORARIO</th>
      <th>PRECIO</th>
      <th>AULA</th>
      <th>ACCIONES</th>
    </tr>
  </thead>
  <tbody>
    <?php foreach ($cursos as $filaTemporal):?>
      <tr>
        <td>
          <?php echo $filaTemporal->id_cur;?>
        </td>
        <td>
          <?php echo $filaTemporal->nombre_cur; ?>
        </td>
        <td>
          <?php echo $filaTemporal->especialidad_cur; ?>
        </td>
        <td>
          <?php echo $filaTemporal->horario_cur; ?>
        </td>
        <td>
          <?php echo $filaTemporal->precio_cur; ?>
        </td>
        <td>
          <?php echo $filaTemporal->aula_cur; ?>
        </td>
        <td class="text-center">
          <a href="#" title="Editar Cursos">
            <i class="glyphicon glyphicon-pencil"></i>
          </a>
          &nbsp;&nbsp; &nbsp;
          <a href="<?php echo site_url(); ?>/cursos/eliminar/<?php echo $filaTemporal->id_cur ?>"
          title="Eliminar Cursos" style="color:red;">
            <i class="glyphicon glyphicon-trash"></i>
          </a>
        </td>

      </tr>
    <?php endforeach; ?>
  </tbody>
</table>
<?php else: ?>
  <h1>NO HAY INSTRUCTORES</h1>
<?php endif; ?>
