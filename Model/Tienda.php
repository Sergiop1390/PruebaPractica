<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Tienda
 *
 * @author Sergio
 */
include_once 'Conexion.php';

class Tienda {

    private $db;
    private $tiendas;

    public function __construct() {
        $this->db = Conectar::conexion();
        $this->tiendas = array();
    }

    function ConsulTiendas() {
        $sql = 'Select ID, Nombre, Fecha_Apertura from tienda';
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

    function InsertTienda($nombre, $dateA) {
        $sql = 'INSERT INTO tienda(Nombre, Fecha_Apertura) VALUES ("' . $nombre . '","' . $dateA . '");';
        $result = $this->db->query($sql);
        if ($result) {
            echo 'yes';
        } else {
            echo 'Noup F ';
        }
    }
    function ConsulTiendaID($id) {
        $sql = 'Select ID, Nombre, Fecha_Apertura from tienda where id = '.$id.'';
        $result = $this->db->query($sql);
        $resArray = [];
        $i = 0;
        while ($res = mysqli_fetch_array($result)) {
            $resArray[$i] = $res;
            $i++;
        }
        var_dump($resArray);
//        echo $num = mysqli_num_rows($result);
        return $resArray;
    }
    function UpdateTienda($id, $nombre, $dateA) {
        $sql = 'UPDATE tienda SET Nombre="'.$nombre.'",Fecha_Apertura="'.$dateA.'" WHERE ID = '.$id.'';
        $result = $this->db->query($sql);
        if ($result) {
            echo 'yes';
        } else {
            echo 'Noup F ';
        }
    }
    function DeleteTienda($id) {
        $sql = 'DELETE FROM `tienda` WHERE ID = '.$id.'';
        $result = $this->db->query($sql);
        if ($result) {
            echo 'yes';
        } else {
            echo 'Noup F ';
        }
    }

}
