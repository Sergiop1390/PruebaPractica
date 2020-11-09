<?php
require_once("../Model/Productos.php");
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
        <script src="../js/TablaProducto.js"></script>
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
                    <th>Descripcion</th>
                    <th>Valor</th>
                    <th>Tienda</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            
            <tbody>
                <?php
                $producto = new Productos();
                $datos = $producto->ConsulProducto();
                foreach ($datos as $producto) {
                    echo "<tr>";
                    echo "<th>".$producto['id']."</th>";       
                    echo "<th>".$producto['Nombre']."</th>";
                    echo "<th>".$producto['Descripcion']."</th>";
                    echo "<th>".$producto['Valor']."</th>";
                    echo "<th>".$producto['Tienda']."</th>";
//                    echo "<th>".$producto['Tienda']."</th>";
                    echo "<th> <input type='button' class='btn btn-success' id='".$producto['id']."' name='UpdateTienda' value='Atualizar Producto'> </th>";
                    echo "<th> <input type='button' class='btn btn-danger' id='".$producto['id']."' name='DeleteTienda' value='Eliminar Producto'> </th>";
                    echo "</tr>";
                }
                ?>
            </tbody>
        </table>
        <input type="button" class="btn btn-primary" name="CrearProducto" value="Crear Producto">

    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
