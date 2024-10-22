<!doctype html>
<html lang="es">

<head>
    <!-- Frameworks bootstrap -->
    <?php include 'views/layouts/head.html'; ?>

    <title>Proyecto 3.1</title>
</head>

<body>
    <!-- capa principal -->
    <div class="container">

        <!-- cabecera documento -->
        <?php include 'views/partials/header.php' ?>

        <!-- Mostrar la tabla de alumnos -->
        <legend>Formulario Editar Libro</legend>

        <!-- Formulario Nuevo alumno -->
        <form>

            <!-- id -->
            <div class="mb-3 row">
                <label for="inputid" class="col-sm-2 col-form-label">Id:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputid" name="id" value="<?= $registro['id']; ?>" readonly>
                </div>
            </div>
            <!-- título -->
            <div class="mb-3 row">
                <label for="inputtitulo" class="col-sm-2 col-form-label">Título:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputtitulo" name="titulo" value="<?= $registro['titulo']; ?>" readonly>
                </div>
            </div>
            <!-- autor -->
            <div class="mb-3 row">
                <label for="inputautor" class="col-sm-2 col-form-label">Autor:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputautor" name="autor" value="<?= $registro['autor']; ?>" readonly>
                </div>
            </div>
            <!-- editorial -->
            <div class="mb-3 row">
                <label for="inputeditorial" class="col-sm-2 col-form-label">Editorial:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputeditorial" name="editorial" value="<?= $registro['editorial']; ?>" readonly>
                </div>
            </div>
            <!-- género -->
            <div class="mb-3 row">
                <label for="inputgenero" class="col-sm-2 col-form-label">Género:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputgenero" name="genero" value="<?= $registro['genero']; ?>" readonly>
                </div>
            </div>
            <!-- precio -->
            <div class="mb-3 row">
                <label for="inputprecio" class="col-sm-2 col-form-label">Precio:</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputprecio" name="precio" value="<?= $registro['precio']; ?>" readonly>
                </div>
            </div>

            <!-- botones de acción -->
            <a class="btn btn-secondary" href="index.php" role="button">Volver</a>
        </form>
        <!-- fin formulario -->


        <!-- Pie del documento -->
        <?php include 'views/partials/footer.php'; ?>

    </div>
    <!-- javascript bootstrap 533 -->
    <?php include 'views/layouts/javascript.html'; ?>
</body>

</html>