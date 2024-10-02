<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>2.1 Calculadora Básica</title>

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
      <i class="bi bi-calculator"></i>
      <span class="fs-6">Proyecto 2.1 - Calculadora Básica</span>
    </header>

    <!-- formulario -->
    <legend>Calculadora Básica</legend>

    <!-- fin del formulario -->
    <form method="GET">

      <!-- Valor 1 -->
      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Valor 1</span>
        <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" step="0.01" placeholder="0.00" name="valor1">
      </div>
      <!-- Valor 1 -->
      <div class="input-group mb-3">
        <span class="input-group-text" id="inputGroup-sizing-default">Valor 2</span>
        <input type="number" class="form-control" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default" step="0.01" placeholder="0.00" name="valor2">
      </div>

      <!-- botones de acción -->
      <div class="btn-group" role="group">
        <button type="reset" class="btn btn-secondary">Borrar</button>
        <button type="submit" class="btn btn-outline-success" formaction="sumar.php">Sumar</button>
        <button type="submit" class="btn btn-outline-success" formaction="restar.php">Resta</button>
        <button type="submit" class="btn btn-outline-success" formaction="sumar.php">Producto</button>
        <button type="submit" class="btn btn-outline-success" formaction="dividir.php">División</button>
      </div>

    </form>

    <!-- pie del documento -->
    <footer class="footer mt-auto py-3 fixed-bottom bg-light">
      <div class="container">
        <span class="text-muted">© 2024
          Pablo Macías Salguero - DWES - 2º DAW - Curso 24/25
        </span>
      </div>
    </footer>

  </div>

  <!-- javascript bootstrap 533 -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>