<?php

////Llamada al modelo
require_once("../Model/Tienda.php");
$num = $_POST['num'];
echo $num;
switch ($num) {
    case 1: //insertar
        $nombre = $_POST['nombre'];
        $dateA = $_POST['dateA'];
        $tienda = new Tienda();
        $tienda->InsertTienda($nombre, $dateA);
        break;
    case 2: //Consultar por ID
        $id = $_POST['ide'];
        $tienda = new Tienda();
        $tienda->ConsulTiendaID($id);
        echo "Aca deberia redireccionar con todo y datos a RegistroTienda.php";
        include '../View/RegistroTienda.php';
        break;
    case 3://Actualizar
        $id = $_POST['codigo'];
        $nombre = $_POST['nombre'];
        $dateA = $_POST['dateA'];
        $tienda = new Tienda();
        $tienda->UpdateTienda($id, $nombre, $dateA);
        break;
    case 4://Delete
        $id = $_POST['id'];
        $tienda = new Tienda();
        $tienda->DeleteTienda($id);
        break;
    default:
        break;
}
?>

