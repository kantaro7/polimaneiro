$(document).ready(function(){

    $('.ced').blur(function() {
        var numero = 0;

        numero = parseInt($(this).val());

        if (numero >= 80) {
            $(this).prev('span').html("E-");
        } else {
            $(this).prev('span').html("V-");
        }
    });

    jQuery(function($){
            $("#numero1").mask("9,99", {

                // Generamos un evento en el momento que se rellena
                completed:function(){
                    $("#numero1").addClass("ok")
                }
            });

            // Definimos las mascaras para cada input
            $('.telefono').mask("(9999)-999-9999");
            $('.rif').mask("99999999-9");
            $('.postal').mask('9999');
    });

    $('.cedula').autoNumeric('init',{
        aSep: '.',
        aDec: ',',
        vMin: '0',
        vMax: '99999999'
    });

    $('.kilometros').autoNumeric('init',{
        aSep: '.',
        aDec: ',',
        vMin: '0',
        vMax: '999999999'
    });


});
