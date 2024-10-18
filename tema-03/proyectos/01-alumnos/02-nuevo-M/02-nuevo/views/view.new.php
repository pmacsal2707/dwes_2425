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

        <legend>Formulario nuevo alumno</legend>

        <form action="create.php" method="POST">

            <!--Id-->
            <div class="mb-3 row">
                <label for="inputId" class="col-sm-2 col-form-label">Id</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputNombre" name="id">
                </div>
            </div>
            <!--Nombre-->
            <div class="mb-3 row">
                <label for="inputNombre" class="col-sm-2 col-form-label">Nombre:</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputNombre" name="nombre">
                </div>
            </div>
            <!--Poblacion-->
            <div class="mb-3 row">
                <label for="inputPoblacion" class="col-sm-2 col-form-label">Poblacion</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPoblacion" name="poblacion">
                </div>
            </div>
            <!--Curso-->
            <div class="mb-3 row">
                <label for="inputCurso" class="col-sm-2 col-form-label">Curso</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputCurso" name="curso">
                </div>
            </div>

            <!--Botones-->
            <a class="btn btn-primary" href="index.php" role="button">Cancelar</a>
            <button class="btn btn-danger" type="reset">Borrar</button>
            <button class="btn btn-white" type="submit">Enviar</button>


        </form>

        <!-- pie del documento -->
        <?php include 'views/partials/footer.html'; ?>


    </div>

    <?php include 'views/layouts/javascript.html'; ?>
    </>


</html>