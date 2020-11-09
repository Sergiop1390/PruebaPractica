$(document).ready(function () {
    $('input[name=CrearTienda]').click(function () {
        $(location).attr('href', './View/RegistroTienda.php');
    });
//    $('input[name=UpdateTienda]').click(function () {
//        $.post('./Controller/TiendaController.php', {ide: $(this).attr("id"), num: "2"}, function (data) {
//            console.log(data);
//        });  
//    });
    $('input[name=UpdateTienda]').click(function () {
        $(location).attr('href', './View/UpdateTienda.php');
    });
    $('input[name=DeleteTienda]').click(function () {
        $.post('./Controller/TiendaController.php', {id: $(this).attr("id"), num: "4"}, function (data) {
            console.log(data);
            if (data) {
                alert('Correcto!');
                location.reload();
            } else {
                alert('algo salio mal');
            }
        });
    });
    $('input[name=VerProductos]').click(function () {
        $(location).attr('href', './View/TablaProductos.php');
    });

});