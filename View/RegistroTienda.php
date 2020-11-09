
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
        <script src="../js/Registro_Tienda.js"></script>
        <title></title>
    </head>
    <body>
        <div class="row justify-content-center">
            <h1>Registrar Tienda</h1><br>
        </div>
        <form <!--method="POST" action="/Controller/TiendaController.php"-->>
            <div class="form-group row justify-content-center">
                <label for="staticEmail" class="col-sm-2 col-form-label">Nombre</label>
                <div class="col-sm-5">
                    <input type="text" class="form-control" id="nombreT" name="nombreT">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <label for="inputPassword" class="col-sm-2 col-form-label">Fecha de apertura</label>
                <div class="col-sm-5">
                    <input type="date" class="form-control" id="fechaA" name="fechaA">
                </div>
            </div>
            <div class="form-group row justify-content-center">
                <div class="col-sm-2">
                    <input type="button" class="btn btn-primary" id="Crear_tienda" value="Enviar">
                </div>
            </div>
        </form>
    </body>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
</html>

