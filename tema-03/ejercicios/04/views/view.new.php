<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Proyecto 3.1</title>

    <!-- css bootstrap 533 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- bootstrap icons 1.11.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- capa principal -->
    <div class="container">

        <!-- cabecera documento -->
        <header class="pb-3 mb-4 border-bottom">
            <i class="bi bi-book"></i>
            <span class="fs-6">Proyecto 3.1 - Librería</span>
        </header>

        <legend>Nuevo libro</legend>

        <form action="create.php" method="POST">

            <!--Id-->
            <div class="mb-3 row">
                <label for="inputId" class="col-sm-2 col-form-label">Id</label>
                <div class="col-sm-10">
                    <input type="number" class="form-control" id="inputid" name="id">
                </div>
            </div>
            <!--titulo-->
            <div class="mb-3 row">
                <label for="inputTitulo" class="col-sm-2 col-form-label">Titulo</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputTitulo" name="titulo">
                </div>
            </div>
            <!--autor-->
            <div class="mb-3 row">
                <label for="inputAutor" class="col-sm-2 col-form-label">Autor</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputAutor" name="autor">
                </div>
            </div>
            <!--editorial-->
            <div class="mb-3 row">
                <label for="inputEditorial" class="col-sm-2 col-form-label">editorial</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputEditorial" name="editorial">
                </div>
            </div>
            <!--genero-->
            <div class="mb-3 row">
                <label for="inputGenero" class="col-sm-2 col-form-label">genero</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputGenero" name="genero">
                </div>
            </div>
            <!--precio-->
            <div class="mb-3 row">
                <label for="inputPrecio" class="col-sm-2 col-form-label">precio</label>
                <div class="col-sm-10">
                    <input type="text" class="form-control" id="inputPrecio" name="precio">
                </div>
            </div>

            <!--Botones-->
            <button class="btn btn-primary" type="submit">Enviar</button>
            <button class="btn btn-danger" type="reset">Borrar</button>



        </form>

        <!-- pie del documento -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">© 2024
                    Pablo García Mangana - DWES - 2º DAW - Curso 24/25
                </span>
            </div>
        </footer>

    </div>

    <!-- javascript bootstrap 533 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    </>

</html>