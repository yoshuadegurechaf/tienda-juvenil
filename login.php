
<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda en linea</title>

    <link href="https://sistemarv.com/demo/tienda_online/css/bootstrap.min.css" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">

    <!-- Menu de navegación -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container my-1">
            <a class="navbar-brand" href="index.php">Tienda online</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBarTop" aria-controls="navBarTop" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navBarTop">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Catalogo</a>
                    </li>
                </ul>

                <a class="btn btn-warning me-3" href="https://store.codigosdeprogramacion.com/details.php?id=18" target="_blank">
					<i class="fas fa-arrow-circle-down"></i> Descarga proyecto
				</a>

                <form method="get" action="index.php" autocomplete="off">
                    <div class="input-group pe-3">
                        <input type="text" name="q" class="form-control" placeholder="Buscar..." aria-describedby="icon-buscar">
                        <button class="btn btn-outline-info" type="submit" id="icon-buscar">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </form>

                <a href="checkout.php" class="btn btn-primary me-2">
                    <i class="fas fa-shopping-cart"></i> Carrito <span id="num_cart" class="badge bg-secondary">2</span>
                </a>
                                    <a href="login.php" class="btn btn-success">
                        <i class="fas fa-user"></i> Ingresar
                    </a>
                            </div>
        </div>
    </nav>
</header>
    <!-- Contenido -->
    <main class="form-login m-auto pt-4">
        <h2>Iniciar sesión</h2>

        
        <form class="row g-3" action="login.php" method="post" autocomplete="off">

            <input type="hidden" name="proceso" value="pago">

            <div class="form-floating">
                <input class="form-control" type="text" id="usuario" name="usuario" placeholder="Usuario" value="juan" required autofocus>
                <label for="usuario">Usuario</label>
            </div>
            <div class="form-floating">
                <input class="form-control" type="password" id="password" name="password" placeholder="Contraseña" value="c26D5+s?16" required>
                <label for="password">Contraseña</label>
            </div>

            <div class="col-12">
                <a href="recupera.php">¿Olvidaste tu contraseña?</a>
            </div>

            <div class="d-grid gap-3 col-12">
                <button type="submit" class="btn btn-primary">Ingresar</button>
            </div>

            <hr>
            <div class="col-12">
                ¿No tiene cuenta? <a href="registro.php">Registrate aquí</a>
            </div>

            <hr>

            <div class="d-grid gap-3 col-12">
                <a href="https://sistemarv.com/demo/tienda_online/admin" class="btn btn-info">Panel de administración</a>
            </div>

        </form>
    </main>

    <div class="container">
    <div class="row pt-3">
        <div class="col">
            <div class="alert alert-danger" role="alert">
                <i class="fas fa-exclamation-triangle"></i>
                Esta tienda online es sólo de demostración.
                <strong>No introduzcas datos personales.</strong>
            </div>
        </div>
    </div>
</div>

<footer class="footer text-lg-start bg-primary bg-gradient mt-auto">
    <div class="container text-md-start pt-2 pb-1">
        <!-- Grid row -->
        <div class="row mt-3">
            <!-- Grid column -->
            <div class="col-12 col-lg-3 col-sm-12 mb-2">
                <!-- Content -->
                <p class="text-white h3">
                    Tienda Online CDP
                </p>
                <p class="mt-1 text-white">
                    &copy; 2022 Copyright: <a href="https://github.com/mroblesdev" target="_blank" class="text-white">MRoblesDev</a>
                </p>
            </div>
            <!-- Grid column -->
        </div>
        <!-- Grid row -->
    </div>
</footer>
    <script src="https://sistemarv.com/demo/tienda_online/js/bootstrap.bundle.min.js"></script>

</body>

</html>