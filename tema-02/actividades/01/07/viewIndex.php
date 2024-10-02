<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Actividad 2.1.3</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">

        <h1>Título</h1>
        <!-- La clase tabla mejora la visualización de una tabla -->
        <table class="table">
            <!-- En thead colocamos los índices de la tabla -->
            <thead>
                <tr>
                    <th>Campo</th>
                    <th>Valor</th>
                </tr>
                <!-- En tbody añadimos cada elemento con la etiqueta td, de izq a der -->
            <tbody>

                <tr>
                    <td>Nombre</td>
                    <td><?= $varNombre ?></td>
                </tr>

                <tr>
                    <td>Apellidos</td>
                    <td><?= $varApellidos ?></td>
                </tr>

                <tr>
                    <td>Población</td>
                    <td><?= $varPoblaciones ?></td>
                </tr>

                <tr>
                    <td>Edad</td>
                    <td><?= $varEdad ?></td>
                </tr>

                <tr>
                    <td>Ciclo</td>
                    <td><?= $varCiclo ?></td>
                </tr>

                <tr>
                    <td>Curso</td>
                    <td><?= $varCurso ?></td>
                </tr>

                <tr>
                    <td>Módulo</td>
                    <td><?= $varModulo ?></td>
                </tr>
            </tbody>
        </table>
        </thead>

        <br>
        <h3>Historia</h3>
        <p>
        Hola <?=$varNombre?>, ¿me puedes decir si tus apllidos son <?=$varApellidos?>? Entiendo. Eres de <?=$varPoblaciones?>, ¿cierto?
        y tienes <?=$varEdad?> ¿Verdad? Bien espero que disfrutes de tu estancia.
        <p>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>

</body>

</html>