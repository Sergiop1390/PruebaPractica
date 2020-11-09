<?php
require_once("../Model/Tienda.php");
?>
<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="../js/UpdateProducto.js"></script>
        <title></title>
    </head>
    <body>
        <div class="row justify-content-center">
            <h1>Actualizar Tienda</h1><br>
        </div>
        <form>
            <div class="form-group row justify-content-center">
                <label for="nombreP" class="col-sm-2 col-form-label">Codigo</label>
                <div class="col-sm-5 row justify-content-center">
                    <input type="text" class="form-control" id="codi" name="codi">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <label for="nombreP" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-5 row justify-content-center">
                    <input type="text" class="form-control" id="nombreP" name="nombreP">
                </div>
            </div>
            <div class="input-group row justify-content-center ">
                <div class="input-group-prepend row justify-content-center">
                    <label class="input-group-text" for="SKU">Tienda</label>
                </div>
                <select class="custom-select" id="SKU">
                    <option value="0">Elegir Tienda</option>
                    <?php
                    $tienda = new Tienda();
                    $datos = $tienda->ConsulTiendas();
                    foreach ($datos as $tiendas) {
                        echo "<option value='" . $tiendas['ID'] . "'>" . $tiendas['Nombre'] . "</th>";
                    }
                    ?>
                </select>
            </div>
            <div class="form-group   row justify-content-center">
                <label for="Descripcion">Descripcion</label>
                <textarea class="form-control" id="Descripcion" name="Descripcion" rows="3"></textarea>
            </div>
            <div class="form-group row justify-content-center">
                <label for="Valor" class="col-sm-2 col-form-label">Valor</label>
                <div class="col-sm-5 row justify-content-center">
                    <input type="number" class="form-control" id="Valor" name="Valor">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <label for="Tienda" class="col-sm-2 col-form-label">Tienda</label>
                <div class="col-sm-5 row justify-content-center">
                    <input type="text" class="form-control" id="Tienda" name="Tienda" disabled="">
                </div>
            </div>
<!--            <div class="input-group mb-3 row justify-content-center">
                <div class="input-group-prepend row justify-content-center">
                    <span class="input-group-text">Imagen</span>
                </div>
                <div class="custom-file row justify-content-center">
                    <input type="file" class="custom-file-input" id="Imagen" name="Imagen">
                    <label class="custom-file-label" for="inputGroupFile01">Elija la Imagen</label>
                </div>
            </div>-->
            <div class="form-group row justify-content-center">
                <div class="col-sm-2">
                    <input type="button" class="btn btn-primary" id="ActualizarProducto" value="Enviar">
                </div>
            </div>
        </form>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>
