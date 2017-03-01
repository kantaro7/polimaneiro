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

    // var mas = 1;
    // $("#agregar").click(function() {
    //     mas++;
    //     var intId = $("#buildyourform div").length + 1;
    //     var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field" + mas + "\"/>");
    //     var fLabel = $("<label>Hijo " + mas + ":</label>");
    //
    //     $("#prueba").removeAttr("style");
    //
    //
    //     var nombre = $("<div class=\"row\"><div class=\"col-lg-4\"><div class=\"form-group\"><label>Nombres</label><input type=\"text\" name=\"nombre_hijo"+mas+"\" class=\"form-control\"></div></div><div class=\"col-lg-4\"><div class=\"form-group\"><label>Apellidos</label><input type=\"text\" name=\"apellido_hijo"+mas+"\" class=\"form-control\"></div></div><div class=\"col-lg-4\"><div class=\"form-group\"><label>Cédula</label><div class=\"input-group m-b\"><span class=\"input-group-addon\">V-</span><input type=\"text\" name=\"cedula_hijo"+mas+"\" class=\"form-control cedula\"></div></div></div></div>");
    //
    //
    //     var fecha = $("<div class=\"row\"><div class=\"col-lg-4\"><div class=\"form-group\" id=\"data_3\"><label>Fecha de nacimiento</label><div class=\"input-group date\"><span class=\"input-group-addon\"><i class=\"fa fa-calendar\"></i></span><input type=\"text\" name=\"fecha_hijo" + mas + "\" class=\"form-control\" value=\"10/11/2013\"></div></div></div><div class=\"col-lg-8\"><div class=\"form-group\"><label>Dirección de residencia *</label><input type=\"text\" name=\"residencia_hijo" + mas + "\" placeholder=\"La Asunción, Edo. Nueva Esparta\" class=\"form-control\"></div></div></div>");
    //
    //
    //     fieldWrapper.append(fLabel);
    //     fieldWrapper.append(nombre);
    //     // fieldWrapper.append(apellido);
    //     // fieldWrapper.append(cedula);
    //     fieldWrapper.append(fecha);
    //     $("#espacio").append(fieldWrapper);
    //
    // });

    //  $("#borrar").click(function(event) {
    //     if(mas > 1){
    //        $("#field" + mas + "").remove();
    //        mas--
    //     }

  //	});

















    // $("#agregar").click(function() {
    //     var intId = $("#buildyourform div").length + 1;
    //     var fieldWrapper = $("<div class=\"fieldwrapper\" id=\"field" + intId + "\"/>");
    //     var fName = $("<input type=\"text\" class=\"fieldname\" />");
    //
    //     var removeButton = $("<input type=\"button\" class=\"remove\" value=\"-\" />");
    //     removeButton.click(function() {
    //         $(this).parent().remove();
    //     });
    //     fieldWrapper.append(fName);
    //     fieldWrapper.append(fType);
    //     fieldWrapper.append(removeButton);
    //     $("#buildyourform").append(fieldWrapper);
    // });
    //
    // $("#preview").click(function() {
    //     $("#yourform").remove();
    //     var fieldSet = $("<fieldset id=\"yourform\"><legend>Your Form</legend></fieldset>");
    //     $("#buildyourform div").each(function() {
    //         var id = "input" + $(this).attr("id").replace("field","");
    //         var label = $("<label for=\"" + id + "\">" + $(this).find("input.fieldname").first().val() + "</label>");
    //         var input;
    //         switch ($(this).find("select.fieldtype").first().val()) {
    //             case "checkbox":
    //                 input = $("<input type=\"checkbox\" id=\"" + id + "\" name=\"" + id + "\" />");
    //                 break;
    //             case "textbox":
    //                 input = $("<input type=\"text\" id=\"" + id + "\" name=\"" + id + "\" />");
    //                 break;
    //             case "textarea":
    //                 input = $("<textarea id=\"" + id + "\" name=\"" + id + "\" ></textarea>");
    //                 break;
    //         }
    //         fieldSet.append(label);
    //         fieldSet.append(input);
    //     });
    //     $("body").append(fieldSet);
    // });
});
