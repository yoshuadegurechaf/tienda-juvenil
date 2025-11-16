<?php 
require 'clases/clienteFunciones.php';
require 'config/config.php';
require 'config/database.php';
$db = new Database();
$con = $db->conectar();
$errors = [];
if (!empty($_POST)) {
    $nombres = trim($_POST['nombres']); 
    $apellidos = trim($_POST['apellidos']);
    $email = trim($_POST['email']);
    $telefono = trim($_POST['telefono']);
    $dni = trim($_POST['dni']); 
    $usuario = trim($_POST['usuario']);
    $password = trim($_POST['password']);
    $repassword = trim($_POST['repassword']);
    if (esNulo([$nombres, $apellidos, $email, $telefono, $dni, $usuario, $password, $repassword])){
        $errors[] = "Debe llenar todos los campos";
    }
    if (!esEmail($email)){
        $errors[] = "Debe ingresar un correo electrónico valido";
    }
    if (!validaPassword($password, $repassword)){
        $errors[] = "Las contraseñas no coinciden";
    }
    if (emailExiste($con, $email)){
        $errors[] = "El correo electrónico $email ya está registrado";
    }
    if (usuarioExiste($con, $usuario)){
        $errors[] = "El nombre de usuario $usuario ya está registrado";
    }
    if (count($errors) == 0){
        $idCliente = registraCliente($con, $nombres, $apellidos, $email, $telefono, $dni, $usuario, $password);
        if ($idCliente > 0){
            header("Location: login.php");
            exit;
        } else {
            $errors[] = "Error al registrar";
        }
    }
} 
?>

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
            <h3>Datos del cliente</h3>

            
            <form class="row g-3" action="registro.php" method="post" autocomplete="off">
                <div class="col-md-6">
                    <label for="nombres"><span class="text-danger">*</span> Nombres</label>
                    <input type="text" name="nombres" id="nombres" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="apellidos"><span class="text-danger">*</span> Apellidos</label>
                    <input type="text" name="apellidos" id="apellidos" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label for="email"><span class="text-danger">*</span> Correo electrónico</label>
                    <input type="email" name="email" id="email" class="form-control" required>
                    <span id="validaEmail" class="text-danger"></span>
                </div>
                <div class="col-md-6">
                    <label for="telefono"><span class="text-danger">*</span> Telefono</label>
                    <input type="tel" name="telefono" id="telefono" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label for="dni"><span class="text-danger">*</span> DNI</label>
                    <input type="text" name="dni" id="dni" class="form-control" required>
                </div>
                <div class="col-md-6">
                    <label for="usuario"><span class="text-danger">*</span> Usuario</label>
                    <input type="text" name="usuario" id="usuario" class="form-control" required>
                    <span id="validaUsuario" class="text-danger"></span>
                </div>

                <div class="col-md-6">
                    <label for="password"><span class="text-danger">*</span> Contraseña</label>
                    <input type="password" name="password" id="password" class="form-control" required>
                </div>

                <div class="col-md-6">
                    <label for="repassword"><span class="text-danger">*</span> Repetir contraseña</label>
                    <input type="password" name="repassword" id="repassword" class="form-control" required>
                </div>

                <i><b>Nota:</b> Los campos con asterisco son obligatorios</i>

                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Registrar</button>
                </div>

            </form>
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
        let txtUsuario = document.getElementById('usuario')
        txtUsuario.addEventListener("blur", function() {
            existeUsuario(txtUsuario.value)
        }, false)

        let txtEmail = document.getElementById('email')
        txtEmail.addEventListener("blur", function() {
            existeEmail(txtEmail.value)
        }, false)

        function existeEmail(email) {
            let url = "clases/clienteAjax.php"
            let formData = new FormData()
            formData.append("action", "existeEmail")
            formData.append("email", email)

            fetch(url, {
                    method: 'POST',
                    body: formData
                }).then(response => response.json())
                .then(data => {

                    if (data.ok) {
                        document.getElementById('email').value = ''
                        document.getElementById('validaEmail').innerHTML = 'Email no disponible'
                    } else {
                        document.getElementById('validaEmail').innerHTML = ''
                    }

                })
        }

        function existeUsuario(usuario) {
            let url = "clases/clienteAjax.php"
            let formData = new FormData()
            formData.append("action", "existeUsuario")
            formData.append("usuario", usuario)

            fetch(url, {
                    method: 'POST',
                    body: formData
                }).then(response => response.json())
                .then(data => {

                    if (data.ok) {
                        document.getElementById('usuario').value = ''
                        document.getElementById('validaUsuario').innerHTML = 'Usuario no disponible'
                    } else {
                        document.getElementById('validaUsuario').innerHTML = ''
                    }

                })
        }
    </script>

</body>

</html>