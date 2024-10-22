<!-- menú principal Alumnos -->
<nav class="navbar navbar-expand-lg bg-body-tertiary">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">Libros</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="new.php">Nuevo</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Ordenar
                    </a>
                    <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="order.php?criterio=id">Id</a></li>
                        <li><a class="dropdown-item" href="order.php?criterio=titulo">Título</a></li>
                        <li><a class="dropdown-item" href="order.php?criterio=autor">Autor</a></li>
                        <li><a class="dropdown-item" href="order.php?criterio=editorial">Editorial</a></li>
                        <li><a class="dropdown-item" href="order.php?criterio=genero">Género</a></li>
                        <li><a class="dropdown-item" href="order.php?criterio=precio">Precio</a></li>
                    </ul>
                </li>


            </ul>
            <form class="d-flex" role="search" action="filter.php" method="GET">
                <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="expresion" required>
                <button class="btn btn-outline-primary" type="submit">Buscar</button>
            </form>
        </div>
    </div>
</nav>