<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="author" content="Marco Robles" />
    <title>Inicio de sesión - Tienda Online</title>
    <link href="/css/styles.css" rel="stylesheet" />

    <style>
        body {
            background-image: url('images/background.jpg');
            height: 100%;
            background-position: center;
            background-repeat: no-repeat;
            background-size: cover;
        }
    </style>
</head>

<body class="bg-aprimary bga-gradient">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-5">
                            <div class="card shadow-lg border-0 rounded-lg mt-5">
                                <div class="card-header">
                                    <h3 class="text-center font-weight-light my-2">Administración de tienda</h3>
                                </div>
                                <div class="card-body">
                                    <h4 class="text-center font-weight-light mb-3">Iniciar sesión</h4>
                                    <form action="index.php" method="post" autocomplete="off">
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="usuario" name="usuario" type="text" placeholder="usuario" value="admin" autofocus required>
                                            <label for="usuario">Usuario</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="password" name="password" type="password" placeholder="Contraseña" value="q5PN#W7O7*" required>
                                            <label for="password">Contraseña</label>
                                        </div>

                                        
                                        <div class="d-grid gap-3 col-12">
                                            <button type="submit" class="btn btn-primary">Ingresar</button>
                                        </div>

                                        <hr>

                                        <div class="text-center col-12">
                                            <a href="https://sistemarv.com/demo/tienda_online/">Regresar a la Tienda</a>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
        <div id="layoutAuthentication_footer">
            <footer class="py-4 bg-light mt-auto">
                <div class="container-fluid px-4">
                    <div class="d-flex align-items-center justify-content-between small">
                        <div class="text-muted">
                            2025 &copy; <a href="https://github.com/mroblesdev">MRoblesDev</a>
                        </div>
                    </div>
                </div>
            </footer>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>
</body>

</html>