<!doctype html>
<html lang="en">

<head>
    <title>Proyecto 3.1</title>

    <!-- Frameworks bootstrap -->
    <?php include 'views/layouts/head.html'; ?>
</head>

<body>
    <!-- Capa principal -->
    <div class="container">

        <!-- cabecera documento -->
        <?php include 'views/partials/header.php' ?>

        <legend>Nuevo libro</legend>

        <form action="create.php" method="POST">

            <!-- Id -->
            <div class="mb-3 row">
                <label for="inputId" class="col-sm-2 col-form-label">Id</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputid" name="id">
                </div>
            </div>
            <!-- Titulo -->
            <div class="mb-3 row">
                <label for="inputTitulo" class="col-sm-2 col-form-label">Titulo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputTitulo" name="titulo">
                </div>
            </div>
            <!-- Autor -->
            <div class="mb-3 row">
                <label for="inputAutor" class="col-sm-2 col-form-label">Autor</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputAutor" name="autor">
                </div>
            </div>
            <!-- Editorial-->
            <div class="mb-3 row">
                <label for="inputEditorial" class="col-sm-2 col-form-label">editorial</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEditorial" name="editorial">
                </div>
            </div>
            <!-- Genero -->
            <div class="mb-3 row">
                <label for="inputGenero" class="col-sm-2 col-form-label">genero</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputGenero" name="genero">
                </div>
            </div>
            <!-- Precio -->
            <div class="mb-3 row">
                <label for="inputPrecio" class="col-sm-2 col-form-label">precio</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPrecio" name="precio">
                </div>
            </div>

            <!-- Botones -->
            <a class="btn btn-secondary" href="index.php" role="button">Cancelar</a>
            <button type="reset" class="btn btn-danger">Borrar</button>
            <button type="submit" class="btn btn-primary">Enviar</button>



        </form>

        <!-- Pie del documento -->
        <?php include 'views/partials/footer.php'; ?>

    </div>

    <!-- javascript bootstrap 533 -->
    <?php include 'views/layouts/javascript.html'; ?>
</body>

</html>