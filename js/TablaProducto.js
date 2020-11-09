$(document).ready(function () {
   
    $('input[name=CrearProducto]').click(function () {
        $(location).attr('href', 'CrearProductos.php');
    });
    
    $('input[name=UpdateTienda]').click(function () {
        $(location).attr('href', 'UpdateProductos.php');
    });
    $('input[name=DeleteTienda]').click(function () {
        $.post('../Controller/ProductoController.php', {id: $(this).attr("id"), num: "4"}, function (data) {
            console.log(data);
            if (data) {
                alert('Correcto!');
                location.reload();
            } else {
                alert('algo salio mal');
            }
        });
    });

});

