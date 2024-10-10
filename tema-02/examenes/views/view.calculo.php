<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Examen Práctico Tema 2</title>

    <!-- css bootstrap 533 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

    <!-- bootstrap icons 1.11.3 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
</head>

<body>
    <!-- Capa principal -->
    <div class="container">

        <!-- Cabecera documento -->
        <header class="pb-3 mb-4 border-bottom">
            <i class="bi bi-arrow-up-right-circle"></i>
            <span class="fs-6">Examen Práctico Tema 2 - Movimiento Circular Uniforme</span>
        </header>

        <table class="table">
            <tr>
                <th scope="col" colspan="2">Valores iniciales</th>
            </tr>
            <tr>
                <td scope="row">Velocidad tangencial</td>
                <td><?= $radio . " m" ?></td>
            </tr>
            <tr>
                <td scope="row">Aceleración centrípeta</td>
                <td><?= $frecuencia . " Hz" ?></td>

            </tr>
            <tr>
                <td scope="row">Fuerza centrípeta</td>
                <td><?= $masa . " Kg" ?></td>
            </tr>
            </tr>
            <tr>
                <th scope="col" colspan="2">Resutado</th>
            </tr>
            <tr>
                <td scope="row">Velocidad tangencial</td>
                <td><?= $vTangencial . " m/s" ?></td>
            </tr>
            <tr>
                <td scope="row">Aceleración centrípeta</td>
                <td><?= $aCentripeta . " m/s2" ?></td>

            </tr>
            <tr>
                <td scope="row">Fuerza centrípeta</td>
                <td><?= $fCentripeta . " N" ?></td>
            </tr>
            <tr>
                <td scope="row">Período</td>
                <td><?= $periodo . " s" ?></td>
            </tr>
        </table>

        <!-- Botones de acción -->
        <div class="btn-group" role="group">
            <a class="btn btn-outline-success" href="index.php" role="button">Volver</a>
        </div>

        <!-- Pie del documento -->
        <footer class="footer mt-auto py-3 fixed-bottom bg-light">
            <div class="container">
                <span class="text-muted">© 2024
                    Pablo Macías Salguero - DWES - 2º DAW - Curso 24/25</span>
            </div>
        </footer>

    </div>
    <!-- javascript bootstrap 533 -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>