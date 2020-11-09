$(document).ready(function () {
    $("#SKU").change(function () {
        $('#Tienda').val($("#SKU option:selected").text());
    });
    $('#ActualizarProducto').click(function () {
        $.post('../Controller/ProductoController.php',
                {   
                    id : $('#codi').val(),
                    nombre: $('#nombreP').val(),
                    SKU: $("#SKU").val(),
                    Descripcion: $('#Descripcion').val(),
                    Valor: $('#Valor').val(),
                    Tienda: $('#Tienda').val(),
//                    Imagen: $('#Imagen').val(),
                    num: "3"},
          function (data) {
                    console.log(data);
            if (data) {
                alert('Correcto!');
                $(location).attr('href', 'TablaProductos.php');
            } else {
                alert('algo salio mal');
            }
        });
    });

});