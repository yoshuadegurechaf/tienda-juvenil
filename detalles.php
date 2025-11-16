<?php

require 'config/config.php';
require 'config/database.php';
$db = new Database();
$con = $db->conectar();

$id = isset($_GET['id']) ? $_GET['id'] : '';
$token = isset($_GET['token']) ? $_GET['token'] : '';

if ($id == '' || $token == '') {
    echo 'Error al procesar la petición';
    exit;
} else {
    $token_tmp = hash_hmac('sha1', $id, KEY_TOKEN);
    if ($token != $token_tmp) {

        $sql = $con->prepare("SELECT count(id) FROM productos WHERE id=? AND activo=1")
        $sql ->execute([$id]);
        if ($sql ->fetchColumn() > 0) {
            $sql = $con->prepare("SELECT id, nombre, descripcion, precio, descuento FROM productos WHERE id=? AND activo=1 LIMIT 1");
            $sql->execute([$id]);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            $nombre = $row['nombre'];
            $descripcion = $row['descripcion'];
            $precio = $row['precio'];
            $descuento = $row['descuento'];
            $precio_desc = $precio - (($precio * $descuento) / 100);
            $dir_images = 'images/productos/' . $id . '/';

            $rutaImg = $dir_images . 'principal.jpg';

            if(!file_exists($rutaImg)) {
                $rutaImg = 'images/no-photo.jpg';
            }

            $images = array();
            $dir = dir($dir_images);

            while (($archivo = $dir ->read()) != false){
                if ($archivo != 'principal.jpg' && (strpos($archivo, 'jpg') || strpos($archivo, 'jpeg') || strpos($archivo, 'png'))) {
                    $images[] = $dir_images . $archivo;
                }
                $dir ->close();
            }

        } else {
        echo 'Error al procesar la petición';
        exit;
    }
   
    }
}   

/* $sql = $con->prepare("SELECT id, nombre, descripcion, precio, descuento FROM productos WHERE activo=1")
$sql->execute();
$resultado = $sql->fetchAll(PDO::FETCH_ASSOC); */

?>

<!DOCTYPE html>
<html lang="es" class="h-100">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tienda en linea</title>

    <link href="https://sistemarv.com/demo/tienda_online/css/bootstrap.min.css" rel="stylesheet">
    <base href="https://sistemarv.com/demo/tienda_online/">
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
        <div class="container">
            <div class="row">
                <div class="col-md-6 order-md-1">

                <div id="carouselImages" class="carousel slide">
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="<?php echo $img ?>" class="d-block w-100" alt="...">"
                        </div>

                        <div class="carousel-item">
                            <?php foreach ($images as $img) { ?>
                                <img src="<?php echo $img ?>" class="d-block w-100" alt="...">
                            <?php } ?>
                        </div>

                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExample" data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExample" data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                    </div>


                </div>
                <div class="col-md-6 order-md-2">
                    <h2><?php echo $nombre; ?></h2>
 
                    <?php if($descuento > 0 ) { ?>
                        <p><del><?php echo MONEDA . number_format($precio, 2, '.', ',') ?></del></p>
                        <h2><?php echo MONEDA . number_format($precio_desc, 2, '.', ',') ?>
                        <small class="text-success"><?php echo $descuento ?>% descuento</small>
                    </h2>

                    <?php } else { ?>
                        <h2><?php echo MONEDA . number_format($precio, 2, '.', ',') ?></h2>
                    <?php } ?>
                    <p class="lead">
                        <?php echo $descripcion ?>
                    </p>
                    <div class="d-grid gap col-10 mx-auto">
                        <button class="btn btn-primary" type="button">comprar ahora</button>
                        <button class="btn btn-outline-primary" type="button">agregar al carrito</button>
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
        function addProducto(id, cantidad) {
            var url = 'clases/carrito.php';
            var formData = new FormData();
            formData.append('id', id);
            formData.append('cantidad', cantidad);

            fetch(url, {
                    method: 'POST',
                    body: formData,
                    mode: 'cors',
                }).then(response => response.json())
                .then(data => {
                    if (data.ok) {
                        let elemento = document.getElementById("num_cart")
                        elemento.innerHTML = data.numero;
                    }
                })
        }
        
        function comprarAhora(id, cantidad) {
            var url = 'clases/carrito.php';
            var formData = new FormData();
            formData.append('id', id);
            formData.append('cantidad', cantidad);

            fetch(url, {
                    method: 'POST',
                    body: formData,
                    mode: 'cors',
                }).then(response => response.json())
                .then(data => {
                    if (data.ok) {
                        let elemento = document.getElementById("num_cart")
                        elemento.innerHTML = data.numero;
                        location.href ='checkout.php';
                    }
                })
        }
    </script>
</body>

</html>