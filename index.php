<?php
require_once 'config/database.php';

$db = new Database();
$conexion = $db->conectar();

$sql = $conexion->prepare("SELECT id, nombre, precio FROM productos_s where activo=1");
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC);

if (!$conexion) {
    die("Error de conexión a la base de datos");
}
?>
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
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBarTop"
                    aria-controls="navBarTop" aria-expanded="false">
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
                            <a class="nav-link active" href="femenino.php">Femenino</a>
                        </li>
                    </ul>
                    <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                        <li class="nav-item">
                            <a class="nav-link active" href="index.php">Contacto</a>
                        </li>
                    </ul>
                    <a href="checkout.php" class="btn btn-primary me-2">
                        <i class="fas fa-shopping-cart"></i> Carrito <span id="num_cart"
                            class="badge bg-secondary">0</span>
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
                                ROPA </a>
                            <a href="index.php?cat=2" class="list-group-item list-group-item-action ">
                                ELECTRODOMESTICOS </a>
                            <a href="index.php?cat=3" class="list-group-item list-group-item-action ">
                                ZAPATOS </a>
                            <a href="index.php?cat=4" class="list-group-item list-group-item-action ">
                                COMPUTACIÓN </a>
                            <a href="index.php?cat=5" class="list-group-item list-group-item-action ">
                                TELEFÓNOS </a>
                            <a href="index.php?cat=6" class="list-group-item list-group-item-action ">
                                PAPELERÍA </a>
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

                                <select class="form-select d-inline-block w-auto pt-1 form-select-sm" name="orden"
                                    id="orden">
                                    <option value="precio_alto">Pecios más altos</option>
                                    <option value="precio_bajo">Pecios más bajos</option>
                                    <option value="asc">Nombre A-Z</option>
                                    <option value="desc">Nombre Z-A</option>
                                </select>
                            </form>
                        </div>
                    </header>

                    <div class="container">
                        <div class="row row-cols-1 row-cols-sm-2 row-cols-md-3 g-3">
                            <?php foreach($resultado as $row) { ?>
                            <div class="col">
                                <div class="card shadow-sm">
                                    <?php
                                                $id = $row['id'];
                                                $img = "img/01.jpeg/".$id."/01.jpeg";
                                                ?>
                                    <img src="<?php echo $img; ?>" class="card-img-top"
                                        alt="Producto <?php echo $id; ?>">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <?php echo $row['nombre']; ?>
                                        </h5>
                                        <p class="card-text">$
                                            <?php echo $row['precio']; ?>
                                        </p>
                                        <div class="d-flex justify-content-between align-items-center">
                                            <div class="btn-group">
                                                <a href="#" class="btn btn-primary">detalles</a>
                                            </div>
                                            <a href="#" class="btn btn-success">Agregar</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <?php } ?>
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
                        &copy; 2022 Copyright: <a href="https://github.com/mroblesdev" target="_blank"
                            class="text-white">MRoblesDev</a>
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
