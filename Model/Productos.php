<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Productos
 *
 * @author Sergio
 */
include_once 'Conexion.php';
class Productos {

    private $db;
    private $tiendas;

    public function __construct() {
        $this->db = Conectar::conexion();
        $this->tiendas = array();
    }

    function ConsulProducto() {
        $sql = 'SELECT id, Nombre, SKU, Descripcion, Valor, Tienda, Imagen FROM producto';
        $result = $this->db->query($sql);
        $resArray = [];
        $i = 0;
        while ($res = mysqli_fetch_array($result)) {
            $resArray[$i] = $res;
            $i++;
        }
//        var_dump($resArray);
//        echo $num = mysqli_num_rows($result);
        return $resArray;
    }

    function InsertProducto($nombre, $SKU, $Descripcion, $Valor, $Tienda) {
        $sql = 'INSERT INTO `producto`(`Nombre`, `SKU`, `Descripcion`, `Valor`, `Tienda`, `Imagen`) '
                . 'VALUES ("'.$nombre.'",'.$SKU.',"'.$Descripcion.'", "'.$Valor.'","'.$Tienda.'", 2345);';
        $result = $this->db->query($sql);
        if ($result) {
            echo 'yes';
        } else {
            echo 'Noup F ';
        }
        var_dump($result);
    }
//    function ConsulTiendaID($id) {
//        $sql = 'Select ID, Nombre, Fecha_Apertura from tienda where id = '.$id.'';
//        $result = $this->db->query($sql);
//        $resArray = [];
//        $i = 0;
//        while ($res = mysqli_fetch_array($result)) {
//            $resArray[$i] = $res;
//            $i++;
//        }
//        var_dump($resArray);
////        echo $num = mysqli_num_rows($result);
//        return $resArray;
//    }
    function UpdateProducto($id, $nombre, $SKU, $Descripcion, $Valor, $Tienda) {
        $sql = 'UPDATE `producto` SET `Nombre`= "'.$nombre.'",`SKU`="'.$SKU.'",'
                . '`Descripcion`="'.$Descripcion.'",`Valor`="'.$Valor.'",`Tienda`="'.$Tienda.'" WHERE id = '.$id.'';
        $result = $this->db->query($sql);
        if ($result) {
            echo 'yes';
        } else {
            echo 'Noup F ';
        }
    }
    function DeleteProducto($id) {
        $sql = 'DELETE FROM `producto` WHERE ID = '.$id.'';
        $result = $this->db->query($sql);
        if ($result) {
            echo 'yes';
        } else {
            echo 'Noup F ';
        }
//        var_dump($result);
    }

}
