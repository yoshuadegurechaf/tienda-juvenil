<?php
require 'config/database.php';  
$db = new Database();
$conexion = $db->conectar();
session_start();
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
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navBarTop"
          aria-controls="navBarTop" aria-expanded="false">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navBarTop">
          <ul class="navbar-nav me-auto mb-2 mb-lg-0">
            <li class="nav-item">
              <a class="nav-link active" href="index.php">Catalogo</a>
            </li>
          </ul>

          <a class="btn btn-warning me-3" href="https://store.codigosdeprogramacion.com/details.php?id=18"
            target="_blank">
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
  <main class="flex-shrink-0">
    <div class="container">

      <div class="table-responsive">
        <table class="table">
          <thead>
            <tr>
              <th>Producto</th>
              <th>Precio</th>
              <th>Cantidad</th>
              <th>Subtotal</th>
              <th></th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>Zapatos color cafe</td>
              <td>$539.10</td>
              <td><input type="number" id="cantidad_1" min="1" max="10" step="1" value="1" size="5"
                  onchange="actualizaCantidad(this.value, 1)" /></td>

              <td>
                <div id="subtotal_1" name="subtotal[]">$539.10</div>
              </td>
              <td><a id="eliminar" class="btn btn-warning btn-sm" data-bs-id="1" data-bs-toggle="modal"
                  data-bs-target="#eliminaModal"><i class="fas fa-trash-alt"></i></a></td>
            </tr>
            <tr>
              <td>Laptop 15.6" con Windows 11</td>
              <td>$11,400.00</td>
              <td><input type="number" id="cantidad_2" min="1" max="10" step="1" value="1" size="5"
                  onchange="actualizaCantidad(this.value, 2)" /></td>

              <td>
                <div id="subtotal_2" name="subtotal[]">$11,400.00</div>
              </td>
              <td><a id="eliminar" class="btn btn-warning btn-sm" data-bs-id="2" data-bs-toggle="modal"
                  data-bs-target="#eliminaModal"><i class="fas fa-trash-alt"></i></a></td>
            </tr>

            <tr>
              <td colspan="3"></td>
              <td colspan="2">
                <p class="h3" id="total">$11,939.10</p>
              </td>
            </tr>


          </tbody>
        </table>
      </div>

      <div class="row">
        <div class="col-md-5 offset-md-7 d-grid gap-2">
          <a href="login.php?pago" class="btn btn-primary btn-lg">Realizar pago</a>
        </div>
      </div>
    </div>
  </main>

  <div class="modal fade" id="eliminaModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Alerta</h5>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          ¿Desea eliminar el producto de la lista?
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Cerrar</button>
          <button id="btn-elimina" class="btn btn-danger" onclick="elimina()">Eliminar</button>
        </div>
      </div>
    </div>
  </div>

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
      <!-- Grid row -->F
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
    let eliminaModal = document.getElementById('eliminaModal')
    eliminaModal.addEventListener('show.bs.modal', function (event) {
      // Button that triggered the modal
      let button = event.relatedTarget
      // Extract info from data-bs-* attributes
      let recipient = button.getAttribute('data-bs-id')
      let botonElimina = eliminaModal.querySelector('.modal-footer #btn-elimina')
      botonElimina.value = recipient
    })

    function actualizaCantidad(cantidad, id) {

      let url = 'clases/actualizar_carrito.php';
      let formData = new FormData();
      formData.append('action', 'agregar');
      formData.append('id', id);
      formData.append('cantidad', cantidad);

      fetch(url, {
        method: 'POST',
        body: formData,
        mode: 'cors',
      }).then(response => response.json())
        .then(data => {
          if (data.ok) {
            let divSubtotal = document.getElementById('subtotal_' + id)
            divSubtotal.innerHTML = data.sub

            let total = 0.00
            let list = document.getElementsByName('subtotal[]')

            for (var i = 0; i < list.length; ++i) {
              total += parseFloat(list[i].innerHTML.replace(/[$,]/g, ''))
            }

            total = new Intl.NumberFormat('en-US', {
              minimumFractionDigits: 2
            }).format(total)
            document.getElementById("total").innerHTML = '$' + total
          } else {
            alert("No ay suficientes productos en el stock")
            let inputCantidad = document.getElementById('cantidad_' + id);
            inputCantidad.value = data.cantidadAnterior;
          }
        })
    }

    function elimina() {
      let botonElimina = document.getElementById('btn-elimina')
      let recipient = botonElimina.value

      let url = 'clases/actualizar_carrito.php';
      let formData = new FormData();
      formData.append('action', 'eliminar');
      formData.append('id', recipient);

      fetch(url, {
        method: 'POST',
        body: formData,
        mode: 'cors',
      }).then(response => response.json())
        .then(data => {
          if (data.ok) {
            location.reload();
          }
        })
    }
  </script>

</body>

</html>