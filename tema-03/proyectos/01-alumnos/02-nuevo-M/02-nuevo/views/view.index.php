<!doctype html>
<html lang="en">

<head>
  <?php include 'views/layouts/head.html'; ?>
  <title>Proyecto 3.1</title>
</head>

<body>
  <!-- capa principal -->
  <div class="container">

    <!-- cabecera documento -->
    <?php include 'views/partials/header.html'; ?>

    <!-- Mostrar la tabla de alumnos -->
    <legend>Tabla alumnos</legend>
    <!-- mostrar menu de alumnos -->
    <?php include 'views/partials/m_alumnos.php'; ?>
    <!-- mostrar la tabla de alumnos -->
    <div class="table-responsive">
      <table
        class="table table-primary">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Nombre</th>
            <th scope="col">Población</th>
            <th scope="col">Curso</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <?php foreach ($alumnos as $i => $registro): ?>
            <tr class="">
              <td scope="row"><?= $registro['id'] ?></td>
              <td><?= $registro['nombre'] ?></td>
              <td><?= $registro['poblacion'] ?></td>
              <td><?= $registro['curso'] ?></td>
              <td>
                <!-- Boton eliminar-->
                <a href="delete.php?id=<?= $registro['id'] ?>" title="Eliminar"
                  onclick="return confirm('Confirmar eliminacion del alumno')">
                  <i class="bi bi-trash-fill"></i></a> <!-- Icono de Bootstrap -->
                <!-- Boton editar-->
                <a href="edit.php?id=<?= $registro['id'] ?>" title="Editar">
                  <i class="bi bi-pencil-square"></i></a> <!-- Icono de Bootstrap -->
              </td>
              <!-- Boton editar-->
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <!-- pie del documento -->
    <?php include 'views/partials/footer.html'; ?>

  </div>

  <!-- javascript bootstrap 533 -->
  <?php include 'views/layouts/javascript.html'; ?>
  </>

</html>