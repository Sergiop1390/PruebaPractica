$(document).ready(function () {
    $('#Actualizar_tienda').click(function () {
        var nombre = $('#nombreT').val();
        var dateA = $('#fechaA').val();
        $.post('../Controller/TiendaController.php', {codigo: $('#cod').val(),nombre: $('#nombreT').val(), dateA: $('#fechaA').val(), num: "3"}, function (data) {
            if (data) {
                alert('Correcto!');
                 $(location).attr('href', '../index.php');
            }else{
                alert('algo salio mal');
            }
        });
    });
});


