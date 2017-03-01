$(document).ready(function(){



    $('#cedula_funcionario').blur(function() {
        var numero = $('#cedula_funcionario').val();

        numero = parseInt(numero);

        if (numero >= 80) {
                $('#signo_funcionario').html("E-");
            } else {
                $('#signo_funcionario').html("V-");
            }
    });

    $('#cedula_conyugue').blur(function() {
        var numero = $('#cedula_conyugue').val();

        numero = parseInt(numero);

        if (numero >= 80) {
                $('#signo_conyugue').html("E-");
            } else {
                $('#signo_conyugue').html("V-");
            }
    });

    $('#cedula_madre').blur(function() {
        var numero = $('#cedula_madre').val();

        numero = parseInt(numero);

        if (numero >= 80) {
                $('#signo_madre').html("E-");
            } else {
                $('#signo_madre').html("V-");
            }
    });

    $('#cedula_padre').blur(function() {
        var numero = $('#cedula_padre').val();

        numero = parseInt(numero);

        if (numero >= 80) {
                $('#signo_padre').html("E-");
            } else {
                $('#signo_padre').html("V-");
            }
    });


    $('#cedula_hijo1').blur(function() {
        var numero = $('#cedula_hijo1').val();

        numero = parseInt(numero);

        if (numero >= 80) {
                $('#signo_hijo1').html("E-");
            } else {
                $('#signo_hijo1').html("V-");
            }
    });

    $('#cedula_hijo2').blur(function() {
        var numero = $('#cedula_hijo2').val();

        numero = parseInt(numero);

        if (numero >= 80) {
                $('#signo_hijo2').html("E-");
            } else {
                $('#signo_hijo2').html("V-");
            }
    });

    $('#cedula_hijo3').blur(function() {
        var numero = $('#cedula_hijo3').val();

        numero = parseInt(numero);

        if (numero >= 80) {
                $('#signo_hijo3').html("E-");
            } else {
                $('#signo_hijo3').html("V-");
            }
    });

    $('#cedula_hijo4').blur(function() {
        var numero = $('#cedula_hijo4').val();

        numero = parseInt(numero);

        if (numero >= 80) {
                $('#signo_hijo4').html("E-");
            } else {
                $('#signo_hijo4').html("V-");
            }
    });

    $('#cedula_hijo5').blur(function() {
        var numero = $('#cedula_hijo5').val();

        numero = parseInt(numero);

        if (numero >= 80) {
                $('#signo_hijo5').html("E-");
            } else {
                $('#signo_hijo5').html("V-");
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
