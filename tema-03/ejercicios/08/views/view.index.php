<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Proyecto 3.1</title>

  <!-- Frameworks bootstrap -->
  <?php include 'views/layouts/head.html'; ?>
</head>

<body>
  <!-- Capa principal -->
  <div class="container">

    <!-- Cabecera documento -->
    <?php include 'views/partials/header.php' ?>

    <!-- Mostrar la tabla de libros -->
    <legend>
      <h1>Tabla libros</h1>
    </legend>

    <!-- Mostrar menu de libros -->
    <?php include 'views/partials/m_alumnos.php' ?>

    <div class="table-responsive">
      <table
        class="table table-white">
        <thead>
          <tr>
            <th scope="col">Id</th>
            <th scope="col">Título</th>
            <th scope="col">Autor</th>
            <th scope="col">Género</th>
            <th scope="col">Editorial</th>
            <th scope="col">Precio</th>
            <th scope="col">Acciones</th>
          </tr>
        </thead>
        <tbody>
          <!-- foreach para recorrer el array -->
          <?php foreach ($libros as $i => $registro): ?>
            <tr class="">
              <td scope="row"><?= $registro['id'] ?></td>
              <td><?= $registro['titulo'] ?></td>
              <td><?= $registro['autor'] ?></td>
              <td><?= $registro['genero'] ?></td>
              <td><?= $registro['editorial'] ?></td>
              <td><?= number_format($registro['precio'], 2, ',', '.') ?> €</td>

              <!-- Botones de Acción -->
              <td>
                <!-- botón eliminar -->
                <a href="delete.php?id=<?= $registro['id'] ?>" title="Eliminar" onclick="return confirm('Confimar elimación del alumno')">
                  <i class="bi bi-trash-fill"></i></a>

                <!-- botón editar -->
                <a href="edit.php?id=<?= $registro['id'] ?>" title="Editar">
                  <i class="bi bi-pencil-square"></i></a>

                <!-- botón mostrar -->
                <a href="show.php?id=<?= $registro['id'] ?>" title="Show">
                  <i class="bi bi-card-text"></i></a>

              </td>
            </tr>
          <?php endforeach; ?>
        </tbody>
      </table>
    </div>

    <!-- pie del documento -->
    <?php include 'views/partials/footer.php'; ?>

  </div>

  <!-- javascript bootstrap 533 -->
  <?php include 'views/layouts/javascript.html'; ?>
</body>

</html>