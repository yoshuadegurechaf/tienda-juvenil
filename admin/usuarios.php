<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>Tienda Online</title>
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
    <link href="https://sistemarv.com/demo/tienda_online/admin/css/styles.css" rel="stylesheet" />
    <script src="https://sistemarv.com/demo/tienda_online/js/all.min.js" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
</head>

<body class="sb-nav-fixed">
    <nav class="sb-topnav navbar navbar-expand navbar-dark bg-dark">
        <!-- Navbar Brand-->
        <a class="navbar-brand ps-3" href="https://sistemarv.com/demo/tienda_online/admin/inicio.php">Tienda Online</a>
        <!-- Sidebar Toggle-->
        <button class="btn btn-link btn-sm order-1 order-lg-0 me-4 me-lg-0" id="sidebarToggle" href="#!"><i class="fas fa-bars"></i></button>

        <!-- Navbar-->
        <ul class="d-none d-md-inline-block navbar-nav ms-auto me-0 me-md-3 my-2 my-md-0">
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" id="navbarDropdown" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false"><i class="fas fa-user"></i> admin</a>
                <ul class="dropdown-menu dropdown-menu-end" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="https://sistemarv.com/demo/tienda_online/admin/cambiar_password.php?id=1">Cambiar contraseña</a></li>
                    <li>
                        <hr class="dropdown-divider" />
                    </li>
                    <li><a class="dropdown-item" href="https://sistemarv.com/demo/tienda_online/admin/logout.php">Cerrar sesión</a></li>
                </ul>
            </li>
        </ul>
    </nav>
    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <a class="nav-link" href="https://sistemarv.com/demo/tienda_online/admin/configuracion">
                            <div class="sb-nav-link-icon"><i class="fas fa-store"></i></div>
                            Configuración
                        </a>

                        <a class="nav-link" href="https://sistemarv.com/demo/tienda_online/admin/usuarios">
                            <div class="sb-nav-link-icon"><i class="fa fa-users"></i></div>
                            Usuarios
                        </a>

                        <a class="nav-link" href="https://sistemarv.com/demo/tienda_online/admin/categorias">
                            <div class="sb-nav-link-icon"><i class="fas fa-layer-group"></i></div>
                            Categorías
                        </a>
                        <a class="nav-link" href="https://sistemarv.com/demo/tienda_online/admin/compras">
                            <div class="sb-nav-link-icon"><i class="fas fa-shopping-basket"></i></div>
                            Compras
                        </a>
                        <a class="nav-link" href="https://sistemarv.com/demo/tienda_online/admin/productos">
                            <div class="sb-nav-link-icon"><i class="fas fa-gifts"></i></div>
                            Productos
                        </a>

                        <div class="text-center mt-2">
                            <div class="d-none d-sm-none d-md-block">
                                <a class="btn btn-warning me-3" href="https://store.codigosdeprogramacion.com/details.php?id=18" target="_blank">
                                    <i class="fas fa-arrow-circle-down"></i> Descarga proyecto
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
<!-- Contenido -->
<main class="flex-shrink-0">
    <div class="container-fluid px-3">
        <h3 id="titulo" class="mt-2">Usuarios</h3>

        <hr>

        <table class="table table-bordered table-sm" aria-describedby="titulo">

            <thead>
                <tr>
                    <th>Nombre</th>
                    <th>usuario</th>
                    <th>Estatus</th>
                    <th style="width: 10%" data-sortable="false"></th>
                    <th style="width: 10%" data-sortable="false"></th>
                </tr>
            </thead>

            <tbody>

                                    <tr>
                        <td>Juan Perez</td>
                        <td>juan</td>
                        <td>Activo</td>
                        <td>
                            <a href="cambiar_password.php?user_id=1" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-user="1">
                                    <i class="fas fa-arrow-down"></i> Baja
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Maria Martínez</td>
                        <td>marco</td>
                        <td>deshabilitado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=2" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="2">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>rrrrrrrr 222222222</td>
                        <td>222222</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=3" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="3">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>d d</td>
                        <td>d</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=4" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="4">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>steven alvarez</td>
                        <td>kjdf</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=5" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="5">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Guillermo XD</td>
                        <td>Bltz</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=6" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="6">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Juan Chavez</td>
                        <td>Pedro</td>
                        <td>Activo</td>
                        <td>
                            <a href="cambiar_password.php?user_id=7" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-user="7">
                                    <i class="fas fa-arrow-down"></i> Baja
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>DANIEL ROSENDO</td>
                        <td>dan777</td>
                        <td>Activo</td>
                        <td>
                            <a href="cambiar_password.php?user_id=8" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-user="8">
                                    <i class="fas fa-arrow-down"></i> Baja
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>rene ruiz</td>
                        <td>holamundo</td>
                        <td>Activo</td>
                        <td>
                            <a href="cambiar_password.php?user_id=9" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-user="9">
                                    <i class="fas fa-arrow-down"></i> Baja
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Luz Alvarez</td>
                        <td>luz</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=10" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="10">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>alex rrrr</td>
                        <td>alex</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=11" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="11">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>juancito uwu</td>
                        <td>juanuwu</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=12" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="12">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>alu pach</td>
                        <td>alu</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=13" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="13">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>miriam mijares</td>
                        <td>bralex</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=14" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="14">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Juan Andres Leandro Rodriguez</td>
                        <td>JuanLeandro</td>
                        <td>Activo</td>
                        <td>
                            <a href="cambiar_password.php?user_id=15" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-user="15">
                                    <i class="fas fa-arrow-down"></i> Baja
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Maria Saf</td>
                        <td>maria11</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=16" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="16">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>mmm ssss</td>
                        <td>maria25</td>
                        <td>Activo</td>
                        <td>
                            <a href="cambiar_password.php?user_id=17" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-user="17">
                                    <i class="fas fa-arrow-down"></i> Baja
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Ivan Gomez</td>
                        <td>Ivan</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=18" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="18">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>ANGEL RAMIREZ</td>
                        <td>mangel783</td>
                        <td>Activo</td>
                        <td>
                            <a href="cambiar_password.php?user_id=19" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-user="19">
                                    <i class="fas fa-arrow-down"></i> Baja
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Dario Indries</td>
                        <td>dcindries</td>
                        <td>Activo</td>
                        <td>
                            <a href="cambiar_password.php?user_id=20" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-user="20">
                                    <i class="fas fa-arrow-down"></i> Baja
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>kjhjknj klklnk</td>
                        <td>jkhjkn</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=21" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="21">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>jbkjb b.kjb.j</td>
                        <td>54352</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=22" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="22">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>ALEXANDRA LIZETH RUIZ MARTINEZ</td>
                        <td>AleLiz</td>
                        <td>Activo</td>
                        <td>
                            <a href="cambiar_password.php?user_id=23" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-user="23">
                                    <i class="fas fa-arrow-down"></i> Baja
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Jdjsskks Jzjsks</td>
                        <td>Djjsjzz</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=24" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="24">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>wertyui oiuytrew</td>
                        <td>wertyu</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=25" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="25">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Pedro Velazquez</td>
                        <td>Pedropedropedro</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=26" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="26">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Pedro Velazquez</td>
                        <td>pedro26</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=27" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="27">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Jesus Hernan</td>
                        <td>siuu</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=28" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="28">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>luis prueba hernandez</td>
                        <td>pruebahb</td>
                        <td>Activo</td>
                        <td>
                            <a href="cambiar_password.php?user_id=29" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-user="29">
                                    <i class="fas fa-arrow-down"></i> Baja
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Jose Mendoza</td>
                        <td>Jose</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=30" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="30">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Juan Navarrete</td>
                        <td>Jsus</td>
                        <td>Activo</td>
                        <td>
                            <a href="cambiar_password.php?user_id=31" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-user="31">
                                    <i class="fas fa-arrow-down"></i> Baja
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>JUAN PEREZ</td>
                        <td>e</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=32" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="32">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>FAUSTO JAVIER PÉREZ</td>
                        <td>we</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=33" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="33">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Cristel Cadena Antonio</td>
                        <td>Eve</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=34" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="34">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Val Soto</td>
                        <td>Valentina</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=35" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="35">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>user sdk</td>
                        <td>user</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=36" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="36">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Juan Suárez</td>
                        <td>Juanjuaan</td>
                        <td>Activo</td>
                        <td>
                            <a href="cambiar_password.php?user_id=37" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-user="37">
                                    <i class="fas fa-arrow-down"></i> Baja
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Camilo Loren</td>
                        <td>Cami</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=38" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="38">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>seba seba</td>
                        <td>seba</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=39" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="39">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>hbnrthrbhr hr</td>
                        <td>hrhrhr</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=40" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="40">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>pepe per</td>
                        <td>mmmm</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=41" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="41">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>mmm m</td>
                        <td>mm</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=42" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="42">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>David Restrepo Monsalve</td>
                        <td>David</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=43" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="43">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Heiner Torres</td>
                        <td>Heiner_Torres</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=44" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="44">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>yasmin servin</td>
                        <td>yas</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=45" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="45">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>yasmin servin</td>
                        <td>yassp</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=46" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="46">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>jehu jarillo</td>
                        <td>jehu</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=47" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="47">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>jehu jarillo</td>
                        <td>alejandro</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=48" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="48">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>jehu jarillo</td>
                        <td>yulian</td>
                        <td>Activo</td>
                        <td>
                            <a href="cambiar_password.php?user_id=49" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-user="49">
                                    <i class="fas fa-arrow-down"></i> Baja
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>dasda dasdasdsadasd</td>
                        <td>45454</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=50" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="50">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>3eeee eeeee</td>
                        <td>dvmmmmm</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=51" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="51">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Andres Villalba Monterrosas</td>
                        <td>andres08</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=52" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="52">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Fat Lopez</td>
                        <td>Fat</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=53" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="53">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Fat Lopez</td>
                        <td>Fati</td>
                        <td>Activo</td>
                        <td>
                            <a href="cambiar_password.php?user_id=54" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-user="54">
                                    <i class="fas fa-arrow-down"></i> Baja
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>JUAN DAVID MONTIEL MUÑOZ</td>
                        <td>JUAN DAVID</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=55" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="55">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>asad adas</td>
                        <td>dsvdvs</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=56" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="56">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Juan Perez</td>
                        <td>JuanitoPerez</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=57" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="57">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>iashdjahduj gdfgevve</td>
                        <td>uttvg</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=58" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="58">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>olololooo prorpro</td>
                        <td>qwewq</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=59" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="59">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Jose Lopez</td>
                        <td>JoseLpz007</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=60" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="60">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>aaaaaaaaaaaaaa aafffffffff</td>
                        <td>dvssdg</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=61" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="61">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>kevin Cruz</td>
                        <td>Wavin15</td>
                        <td>Activo</td>
                        <td>
                            <a href="cambiar_password.php?user_id=62" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-user="62">
                                    <i class="fas fa-arrow-down"></i> Baja
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>pepito casanova</td>
                        <td>yomero</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=63" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="63">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Alejandro Iván Avendaño Salazar</td>
                        <td>Alejandro17</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=64" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="64">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>mario guizar</td>
                        <td>mario636</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=65" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="65">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>KARLA RAMOS</td>
                        <td>ayard007</td>
                        <td>Activo</td>
                        <td>
                            <a href="cambiar_password.php?user_id=66" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-user="66">
                                    <i class="fas fa-arrow-down"></i> Baja
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>ashley panta ventura</td>
                        <td>admin</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=67" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="67">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Joss ortigerio</td>
                        <td>Malandroso</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=68" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="68">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>jorge pena</td>
                        <td>compuservice</td>
                        <td>Activo</td>
                        <td>
                            <a href="cambiar_password.php?user_id=69" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-user="69">
                                    <i class="fas fa-arrow-down"></i> Baja
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Ivan Bobo</td>
                        <td>Ivans</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=70" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="70">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Martin Alvarez</td>
                        <td>qwe3456u</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=71" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="71">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Fer Red</td>
                        <td>Crl</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=72" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="72">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Car Tex</td>
                        <td>Fer</td>
                        <td>Activo</td>
                        <td>
                            <a href="cambiar_password.php?user_id=73" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-user="73">
                                    <i class="fas fa-arrow-down"></i> Baja
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>DEGO LOZADA</td>
                        <td>ffff</td>
                        <td>Activo</td>
                        <td>
                            <a href="cambiar_password.php?user_id=74" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-user="74">
                                    <i class="fas fa-arrow-down"></i> Baja
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Yahir 345678</td>
                        <td>yahir</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=75" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="75">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>1 1</td>
                        <td>1</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=76" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="76">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Rey San</td>
                        <td>Reysin</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=77" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="77">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>jassiel eliel rojas escudero</td>
                        <td>jj</td>
                        <td>Activo</td>
                        <td>
                            <a href="cambiar_password.php?user_id=78" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-user="78">
                                    <i class="fas fa-arrow-down"></i> Baja
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Jose Cerron</td>
                        <td>JoseCS</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=79" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="79">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Jose Perez</td>
                        <td>JosePR</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=80" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="80">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Jordan Suarez</td>
                        <td>Cris</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=81" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="81">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>Jose Colmen</td>
                        <td>Jgch</td>
                        <td>Activo</td>
                        <td>
                            <a href="cambiar_password.php?user_id=82" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-user="82">
                                    <i class="fas fa-arrow-down"></i> Baja
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>er er</td>
                        <td>er</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=83" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="83">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>pablo perz</td>
                        <td>Pablos</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=84" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="84">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>gr gr</td>
                        <td>erg</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=85" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="85">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>meme eeee</td>
                        <td>meme86</td>
                        <td>Activo</td>
                        <td>
                            <a href="cambiar_password.php?user_id=86" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-danger" data-bs-toggle="modal" data-bs-target="#eliminaModal" data-bs-user="86">
                                    <i class="fas fa-arrow-down"></i> Baja
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>as asasasa</td>
                        <td>123</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=87" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="87">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                                    <tr>
                        <td>hrh trjrtj</td>
                        <td>tjt</td>
                        <td>No activado</td>
                        <td>
                            <a href="cambiar_password.php?user_id=88" class="btn btn-sm btn-warning">
                                <i class="fas fa-key"></i> Cambia
                            </a>
                        </td>
                        <td>

                                                            <button type="button" class="btn btn-sm btn-success" data-bs-toggle="modal" data-bs-target="#activaModal" data-bs-user="88">
                                    <i class="fas fa-check-circle"></i> Activa
                                </button>
                                                    </td>
                    </tr>

                
            </tbody>
        </table>
    </div>
</main>

<!-- Modal Body -->
<div class="modal fade" id="eliminaModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Alerta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Desea deshabilitar este usuario?
            </div>
            <div class="modal-footer">
                <form action="deshabilita.php" method="post">
                    <input type="hidden" name="id">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-danger">Deshabilitar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<!-- Modal Body -->
<div class="modal fade" id="activaModal" tabindex="-1" data-bs-backdrop="static" data-bs-keyboard="false" role="dialog" aria-labelledby="modalTitleId" aria-hidden="true">
    <div class="modal-dialog modal-sm" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="modalTitleId">Alerta</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                ¿Desea activar este usuario?
            </div>
            <div class="modal-footer">
                <form action="activa.php" method="post">
                    <input type="hidden" name="id">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
                    <button type="submit" class="btn btn-success">Activar</button>
                </form>
            </div>
        </div>
    </div>
</div>

<script>
    let eliminaModal = document.getElementById('eliminaModal')
    eliminaModal.addEventListener('show.bs.modal', function(event) {

        let button = event.relatedTarget
        let user = button.getAttribute('data-bs-user')

        let modalInputId = eliminaModal.querySelector('.modal-footer input')
        modalInputId.value = user
    })

    let activaModal = document.getElementById('activaModal')
    activaModal.addEventListener('show.bs.modal', function(event) {

        let button = event.relatedTarget
        let user = button.getAttribute('data-bs-user')

        let modalInputId = activaModal.querySelector('.modal-footer input')
        modalInputId.value = user
    })
</script>

<footer class="bg-light mt-auto">
    <div class="container-fluid px-4">
        <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">
                2025 &copy; <a href="https://github.com/mroblesdev">MRoblesDev</a>
            </div>
            <div class="alert alert-warning col-9" role="alert">
                <i class="fas fa-exclamation-triangle"></i>
                <span class="fs-5">Este panel es sólo de demostración.
                <strong>Algunas funciones estan desactivadas.</strong></span>
            </div>
        </div>
    </div>
</footer>
</div>
</div>
<script src="https://sistemarv.com/demo/tienda_online/js/bootstrap.bundle.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js" crossorigin="anonymous"></script>
<script src="https://sistemarv.com/demo/tienda_online/admin/js/scripts.js"></script>
</body>

</html>