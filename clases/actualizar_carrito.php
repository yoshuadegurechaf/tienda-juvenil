<?php 
require 'config/database.php';
require '../config/config.php';

if(isset($_POST['action'])){

    $action = $_POST['action'];
    $id = isset($_POST['id']) ? $_POST['id'] : 0;

    if ($action == 'agregar'){

        $cantidad = isset($_POST['cantidad']) ? $_POST['cantidad'] : 0;
        $res = agregar($id, $cantidad);
        if ($respuesta > 0) {
            $datos ['ok'] = true;
        } else {
            $datos ['ok'] = false;
        }
        $datos ['sub'] = MONEDA . number_format($res, 2, '.', ',');
    } else {
        $datos ['ok'] = false;
    }
}

echo json_encode($datos);
exit;
function eliminar($id){
    if ($id > 0) {
        if (isset($_SESSION['carrito']['productos'][$id])) {
            unset($_SESSION['carrito']['productos'][$id]);
            return true;
        }
    } else {
        return false;
    }
}

function agregar($id, $cantidad){

    $reas = 0;
    if ($id > 0 && $cantidad > 0 && is_numeric($cantidad)) {
        if (isset($_SESSION['carrito']['productos'][$id])) {
            $_SESSION['carrito']['productos'][$id] = $cantidad;

            $db = new Database();
            $conexion = $db->conectar();
            $sql = $conexion->prepare("SELECT precio, descuento FROM productosm WHERE id=? AND activo=1 limit 1");
            $sql->execute([$id]);
            $row = $sql->fetch(PDO::FETCH_ASSOC);
            $precio = $row['precio'];
            $descuento = $row['descuento'];
            $precio_desc = $precio - (($precio * $descuento) / 100);
            $res = $precio_desc * $cantidad;

            return $res;
        }
      
    } else {
        return $reas;
    }
}  

?>