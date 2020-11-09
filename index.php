<?php
require_once("./Model/Tienda.php");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.-->

<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <title></title>
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="js/index.js"></script>
    </head>
    <body>
        <div class="row justify-content-center">
            <h1>Lista de tiendas</h1><br>
        </div>
        <table border="1" class="table">
            <thead class="thead-dark">
                <tr><!--Filas --> 
                    <th>ID</th><!--Columnas -->
                    <th>Nombre</th>
                    <th>Fecha de Apertura</th>
                    <th></th>
                    <th></th>
<!--                    <th></th>-->
                </tr>
            </thead>
            
            <tbody>
                <?php
                $tienda = new Tienda();
                $datos = $tienda->ConsulTiendas();
                foreach ($datos as $tiendas) {
                    echo "<tr>";
                    echo "<th>".$tiendas['ID']."</th>";       
                    echo "<th>".$tiendas['Nombre']."</th>";
                    echo "<th>".$tiendas['Fecha_Apertura']."</th>";
                    echo "<th> <input type='button' class='btn btn-success' id='".$tiendas['ID']."' name='UpdateTienda'value='Atualizar Tienda'> </th>";
                    echo "<th> <input type='button' class='btn btn-danger' id='".$tiendas['ID']."' name='DeleteTienda' value='Eliminar Tienda'> </th>";
                    //echo "<th> <input type='button' class='btn btn-info' id='".$tiendas['ID']."' name='VerProductos' value='Ver Productos'> </th>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <input type="button" class="btn btn-primary" name="CrearTienda" value="Crear Tienda">
        <input type="button" class="btn btn-info" name="VerProductos" value="Ver Producto">

    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
