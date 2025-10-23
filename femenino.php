<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="C&oacute;digos de Programaci&oacute;n">
    <meta property="og:type" content="article" />
    <meta property="og:url" content="https://sistemarv.com/demo/tienda_online" />
    <meta property="og:title" content="Tienda Online CDP" />
    <meta property="og:description" content="Demo de Tienda Online desarrollada en PHP y MySQL." />
    <meta property="og:image" content="https://store.codigosdeprogramacion.com/images/18/1.jpg">
    <title>Tienda en linea</title>

    <!-- Google tag (gtag.js) -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=G-4G5KB2ZVC2"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'G-4G5KB2ZVC2');
    </script>

    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/all.min.css" rel="stylesheet">
    <link href="css/estilos.css" rel="stylesheet">
</head>

<body class="d-flex flex-column h-100">

    <!-- Menu de navegación -->
<header>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <div class="container my-1">
            <a class="navbar-brand" href="index.php">MadeOn</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBarTop" aria-controls="navBarTop" aria-expanded="false">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navBarTop">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Inicio</a>
                    </li>
                </ul>
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Masculino</a>
                    </li>
                </ul>
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Femenino</a>
                    </li>
                </ul>
                 <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Contacto</a>
                    </li>
                </ul>
                <a href="checkout.php" class="btn btn-primary me-2">
                    <i class="fas fa-shopping-cart"></i> Carrito <span id="num_cart" class="badge bg-secondary">0</span>
                </a>
                                    <a href="login.php" class="btn btn-success">
                        <i class="fas fa-user"></i> Ingresar
                    </a>
                            </div>
        </div>
    </nav>
</header>
    <!-- Contenido -->
    <main class="flex-shrink-0">
        <div class="container p-3">
            <div class="row">
                <div class="col-12 col-md-3 col-lg-3">
                    <div class="card shadow-sm">
                        <div class="card-header">
                            Categorías
                        </div>

                        <div class="list-group">
                            <a href="index.php" class="list-group-item list-group-item-action">TODO</a>
                                                            <a href="index.php?cat=1" class="list-group-item list-group-item-action ">
                                    ROPA                                </a>
                                                            <a href="index.php?cat=2" class="list-group-item list-group-item-action ">
                                    ELECTRODOMESTICOS                                </a>
                                                            <a href="index.php?cat=3" class="list-group-item list-group-item-action ">
                                    ZAPATOS                                </a>
                                                            <a href="index.php?cat=4" class="list-group-item list-group-item-action ">
                                    COMPUTACIÓN                                </a>
                                                            <a href="index.php?cat=5" class="list-group-item list-group-item-action ">
                                    TELEFÓNOS                                </a>
                                                            <a href="index.php?cat=6" class="list-group-item list-group-item-action ">
                                    PAPELERÍA                                </a>
                                                    </div>
                    </div>
                </div>

                <div class="col-12 col-md-9 col-lg-9">
                    <header class="d-sm-flex align-items-center border-bottom mb-4 pb-3">
                        <strong class="d-block py-2">9 Artículos encontrados </strong>
                        <div class="ms-auto">
                            <form action="index.php" id="ordenForm" method="get" onchange="submitForm()">
                                <input type="hidden" id="cat" name="cat" value="">
                                <label for="cbx-orden" class="form-label">Ordena por</label>

                                <select class="form-select d-inline-block w-auto pt-1 form-select-sm" name="orden" id="orden">
                                    <option value="precio_alto" >Pecios más altos</option>
                                    <option value="precio_bajo" >Pecios más bajos</option>
                                    <option value="asc" >Nombre A-Z</option>
                                    <option value="desc" >Nombre Z-A</option>
                                </select>
                            </form>
                        </div>
                    </header>

                    <div class="row">
                                                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                                <div class="card w-100 my-2 shadow-2-strong">

                                                                        <a href="details/zapatos-color-cafe">
                                        <img src="images/productos/1/principal.jpg" class="img-thumbnail" style="max-height: 280px">
                                    </a>

                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex flex-row">
                                            <h5 class="mb-1 me-1">$ 599.00</h5>
                                        </div>
                                        <p class="card-text">Zapatos color cafe</p>
                                    </div>

                                    <div class="card-footer bg-transparent">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a class="btn btn-success" onClick="addProducto(1)">Agregar</a>
                                            <div class="btn-group">
                                                <a href="details/zapatos-color-cafe" class="btn btn-primary">Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                                <div class="card w-100 my-2 shadow-2-strong">

                                                                        <a href="details/laptop-15-6-con-windows-11">
                                        <img src="images/productos/2/principal.jpg" class="img-thumbnail" style="max-height: 280px">
                                    </a>

                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex flex-row">
                                            <h5 class="mb-1 me-1">$ 12,000.00</h5>
                                        </div>
                                        <p class="card-text">Laptop 15.6" con Windows 11</p>
                                    </div>

                                    <div class="card-footer bg-transparent">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a class="btn btn-success" onClick="addProducto(2)">Agregar</a>
                                            <div class="btn-group">
                                                <a href="details/laptop-15-6-con-windows-11" class="btn btn-primary">Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                                <div class="card w-100 my-2 shadow-2-strong">

                                                                        <a href="details/smartphone-negro-32gb-dual-sim-3gb-ram">
                                        <img src="images/productos/3/principal.jpg" class="img-thumbnail" style="max-height: 280px">
                                    </a>

                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex flex-row">
                                            <h5 class="mb-1 me-1">$ 2,899.00</h5>
                                        </div>
                                        <p class="card-text">Smartphone Negro 32gb Dual Sim 3gb Ram</p>
                                    </div>

                                    <div class="card-footer bg-transparent">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a class="btn btn-success" onClick="addProducto(3)">Agregar</a>
                                            <div class="btn-group">
                                                <a href="details/smartphone-negro-32gb-dual-sim-3gb-ram" class="btn btn-primary">Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                                <div class="card w-100 my-2 shadow-2-strong">

                                                                        <a href="details/zapatos-negros">
                                        <img src="images/productos/4/principal.jpg" class="img-thumbnail" style="max-height: 280px">
                                    </a>

                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex flex-row">
                                            <h5 class="mb-1 me-1">$ 1,500.00</h5>
                                        </div>
                                        <p class="card-text">Zapatos Negros</p>
                                    </div>

                                    <div class="card-footer bg-transparent">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a class="btn btn-success" onClick="addProducto(4)">Agregar</a>
                                            <div class="btn-group">
                                                <a href="details/zapatos-negros" class="btn btn-primary">Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                                <div class="card w-100 my-2 shadow-2-strong">

                                                                        <a href="details/computadora-con-windows-10">
                                        <img src="images/productos/5/principal.jpg" class="img-thumbnail" style="max-height: 280px">
                                    </a>

                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex flex-row">
                                            <h5 class="mb-1 me-1">$ 10,000.00</h5>
                                        </div>
                                        <p class="card-text">Computadora con Windows 10</p>
                                    </div>

                                    <div class="card-footer bg-transparent">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a class="btn btn-success" onClick="addProducto(5)">Agregar</a>
                                            <div class="btn-group">
                                                <a href="details/computadora-con-windows-10" class="btn btn-primary">Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                                <div class="card w-100 my-2 shadow-2-strong">

                                                                        <a href="details/pantal-n-mezclilla">
                                        <img src="images/productos/6/principal.jpg" class="img-thumbnail" style="max-height: 280px">
                                    </a>

                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex flex-row">
                                            <h5 class="mb-1 me-1">$ 300.00</h5>
                                        </div>
                                        <p class="card-text">Pantalón Mezclilla</p>
                                    </div>

                                    <div class="card-footer bg-transparent">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a class="btn btn-success" onClick="addProducto(6)">Agregar</a>
                                            <div class="btn-group">
                                                <a href="details/pantal-n-mezclilla" class="btn btn-primary">Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                                <div class="card w-100 my-2 shadow-2-strong">

                                                                        <a href="details/refrigerador-hisense-silver">
                                        <img src="images/productos/7/principal.jpg" class="img-thumbnail" style="max-height: 280px">
                                    </a>

                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex flex-row">
                                            <h5 class="mb-1 me-1">$ 6,999.00</h5>
                                        </div>
                                        <p class="card-text">Refrigerador Hisense silver</p>
                                    </div>

                                    <div class="card-footer bg-transparent">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a class="btn btn-success" onClick="addProducto(7)">Agregar</a>
                                            <div class="btn-group">
                                                <a href="details/refrigerador-hisense-silver" class="btn btn-primary">Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                                <div class="card w-100 my-2 shadow-2-strong">

                                                                        <a href="details/microondas-mabe-silver-20l">
                                        <img src="images/productos/8/principal.jpg" class="img-thumbnail" style="max-height: 280px">
                                    </a>

                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex flex-row">
                                            <h5 class="mb-1 me-1">$ 2,999.00</h5>
                                        </div>
                                        <p class="card-text">Microondas Mabe silver 20L</p>
                                    </div>

                                    <div class="card-footer bg-transparent">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a class="btn btn-success" onClick="addProducto(8)">Agregar</a>
                                            <div class="btn-group">
                                                <a href="details/microondas-mabe-silver-20l" class="btn btn-primary">Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                                    <div class="col-lg-4 col-md-6 col-sm-6 d-flex">
                                <div class="card w-100 my-2 shadow-2-strong">

                                                                        <a href="details/5-cuadernos-profesional-arimany-100-hojas-doble-espiral">
                                        <img src="images/productos/9/principal.jpg" class="img-thumbnail" style="max-height: 280px">
                                    </a>

                                    <div class="card-body d-flex flex-column">
                                        <div class="d-flex flex-row">
                                            <h5 class="mb-1 me-1">$ 246.00</h5>
                                        </div>
                                        <p class="card-text">5 Cuadernos Profesional Arimany 100 Hojas Doble Espiral</p>
                                    </div>

                                    <div class="card-footer bg-transparent">
                                        <div class="d-flex justify-content-between align-items-center">
                                            <a class="btn btn-success" onClick="addProducto(9)">Agregar</a>
                                            <div class="btn-group">
                                                <a href="details/5-cuadernos-profesional-arimany-100-hojas-doble-espiral" class="btn btn-primary">Detalles</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                                            </div>
                </div>
            </div>
        </div>
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
    <script>
        function addProducto(id) {
            var url = 'clases/carrito.php';
            var formData = new FormData();
            formData.append('id', id);

            fetch(url, {
                    method: 'POST',
                    body: formData,
                    mode: 'cors',
                }).then(response => response.json())
                .then(data => {
                    if (data.ok) {
                        let elemento = document.getElementById("num_cart")
                        elemento.innerHTML = data.numero;
                    } else {
                        alert("No ay suficientes productos en el stock")
                    }
                })
        }

        function submitForm() {
            document.getElementById("ordenForm").submit();
        }
    </script>
</body>

</html>