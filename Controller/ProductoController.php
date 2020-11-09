<?php

////Llamada al modelo
require_once("../Model/Productos.php");
$num = $_POST['num'];
echo $num;
switch ($num) {
    case 1: //insertar
//        if (isset($_POST["Imagen"])) {
//            $revisar = getimagesize($_FILES["Imagen"]["tmp_name"]);
//            if ($revisar !== false) {
//                $image = $_FILES['Imagen']['tmp_name'];
//                $imgContenido = addslashes(file_get_contents($image));
//            }
//        }
//        var_dump($imgContenido);
//        echo $_POST["Imagen"];
        $nombre = $_POST['nombre'];
        $SKU = $_POST['SKU'];
        $Descripcion = $_POST['Descripcion'];
        $Valor = $_POST['Valor'];
        $Tienda = $_POST['Tienda'];

        $producto = new Productos();
        $producto->InsertProducto($nombre, $SKU, $Descripcion, $Valor, $Tienda);
        break;
    case 2: //Consultar por ID
//        $id = $_POST['ide'];
//        $tienda = new Tienda();
//        $tienda->ConsulTiendaID($id);
//        echo "Aca deberia redireccionar con todo y datos a RegistroTienda.php";
//        include '../View/RegistroTienda.php';
        break;
    case 3://Actualizar
        $id = $_POST['id'];
        $nombre = $_POST['nombre'];
        $SKU = $_POST['SKU'];
        $Descripcion = $_POST['Descripcion'];
        $Valor = $_POST['Valor'];
        $Tienda = $_POST['Tienda'];
        $producto = new Productos();
        $producto->UpdateProducto($id, $nombre, $SKU, $Descripcion, $Valor, $Tienda);
        break;
    case 4://Delete
        $id = $_POST['id'];
        $producto = new Productos();
        $producto->DeleteProducto($id);
        break;
    default:
        break;
}
?>
