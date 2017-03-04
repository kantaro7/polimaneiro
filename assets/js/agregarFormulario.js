//gustavo estuvo aqui
$(document).ready(function() {

    var cantidad = 0;
    $("#agregar2").click(function(){
        $("#hijo2").show();
        $("#agregar2").hide();
        $("#agregar3").show();
        $("#borrar2").show();
        cantidad ++;
        $("#cant_hijos").val(cantidad);
    });

    $("#borrar2").click(function(){
        $("#hijo2").hide();
        $("#agregar2").show();
        $("#agregar3").hide();
        $("#borrar2").hide();
        cantidad --;
        $("#cant_hijos").val(cantidad);
    });

    $("#agregar3").click(function(){
        $("#hijo3").show();
        $("#agregar3").hide();
        $("#agregar4").show();
        $("#borrar2").hide();
        $("#borrar3").show();
        cantidad ++;
        $("#cant_hijos").val(cantidad);
    });

    $("#borrar3").click(function(){
        $("#hijo3").hide();
        $("#agregar3").show();
        $("#agregar4").hide();
        $("#borrar2").show();
        $("#borrar3").hide();
        cantidad --;
        $("#cant_hijos").val(cantidad);
    });

    $("#agregar4").click(function(){
        $("#hijo4").show();
        $("#agregar4").hide();
        $("#agregar5").show();
        $("#borrar3").hide();
        $("#borrar4").show();
        cantidad ++;
        $("#cant_hijos").val(cantidad);
    });

    $("#borrar4").click(function(){
        $("#hijo4").hide();
        $("#agregar4").show();
        $("#agregar5").hide();
        $("#borrar3").show();
        $("#borrar4").hide();
        cantidad --;
        $("#cant_hijos").val(cantidad);
    });

    $("#agregar5").click(function(){
        $("#hijo5").show();
        $("#agregar5").hide();
        $("#borrar4").hide();
        $("#borrar5").show();
        cantidad ++;
        $("#cant_hijos").val(cantidad);
    });

    $("#borrar5").click(function(){
        $("#hijo5").hide();
        $("#agregar5").show();
        $("#borrar4").show();
        $("#borrar5").hide();
        cantidad --;
        $("#cant_hijos").val(cantidad);
    });

    if ($("#soltero").is(':checked')) {
        $(".conyugue").hide();
    };

    $("#soltero").on('ifClicked', function (ev) {
        $(".conyugue").hide();
    });

    $("#casado").on('ifClicked', function (ev) {
        $(".conyugue").show();
    });

    $("#viudo").on('ifClicked', function (ev) {
        $(".conyugue").show();
    });

    $("#divorciado").on('ifClicked', function (ev) {
        $(".conyugue").show();
    });

    $("#si").on('ifClicked', function (ev) {
        $("#militar").show();
    });

    $("#no").on('ifClicked', function (ev) {
        $("#militar").hide();
    });

    $("#modelo").hide();

    if ($("#patrulla").is(':checked')) {
        $("#formPatrulla").show();
        $("#formMoto").hide();
        $("#formAutobus").hide();
        $("#formCamion").hide();
        $("#formBicicleta").hide();
    };

    $("#patrulla").on('ifClicked', function (ev) {
        $("#formPatrulla").show();
        $("#formMoto").hide();
        $("#formAutobus").hide();
        $("#formCamion").hide();
        $("#formBicicleta").hide();
    });

    $("#moto").on('ifClicked', function (ev) {
        $("#formPatrulla").hide();
        $("#formMoto").show();
        $("#formAutobus").hide();
        $("#formCamion").hide();
        $("#formBicicleta").hide();
    });

    $("#autobus").on('ifClicked', function (ev) {
        $("#formPatrulla").hide();
        $("#formMoto").hide();
        $("#formAutobus").show();
        $("#formCamion").hide();
        $("#formBicicleta").hide();
    });

    $("#camion").on('ifClicked', function (ev) {
        $("#formPatrulla").hide();
        $("#formMoto").hide();
        $("#formAutobus").hide();
        $("#formCamion").show();
        $("#formBicicleta").hide();
    });

    $("#bicicleta").on('ifClicked', function (ev) {
        $("#formPatrulla").hide();
        $("#formMoto").hide();
        $("#formAutobus").hide();
        $("#formCamion").hide();
        $("#formBicicleta").show();
    });

    if ($("#directivo").is(':checked')) {
        $("#formdDirectivo").show();
        $("#formAdministrativo").hide();
        $("#formPolicia").hide();
        $("#formObrero").hide();
        $("#formContratado").hide();
    };

    $("#directivo").on('ifClicked', function (ev) {
        $("#formdDirectivo").show();
        $("#formAdministrativo").hide();
        $("#formPolicia").hide();
        $("#formObrero").hide();
        $("#formContratado").hide();
    });

    $("#administrativo").on('ifClicked', function (ev) {
        $("#formdDirectivo").hide();
        $("#formAdministrativo").show();
        $("#formPolicia").hide();
        $("#formObrero").hide();
        $("#formContratado").hide();
    });

    $("#policia").on('ifClicked', function (ev) {
        $("#formdDirectivo").hide();
        $("#formAdministrativo").hide();
        $("#formPolicia").show();
        $("#formObrero").hide();
        $("#formContratado").hide();
    });

    $("#obrero").on('ifClicked', function (ev) {
        $("#formdDirectivo").hide();
        $("#formAdministrativo").hide();
        $("#formPolicia").hide();
        $("#formObrero").show();
        $("#formContratado").hide();
    });

    $("#contratado").on('ifClicked', function (ev) {
        $("#formdDirectivo").hide();
        $("#formAdministrativo").hide();
        $("#formPolicia").hide();
        $("#formObrero").hide();
        $("#formContratado").show();
    });

});
