$(document).ready(function() {

    var cont = 1;
    var contH = 1;

    $('#agregarFuncionario').on("click", function(event){
        cont++;

        $('#cantFunc').val(cont);

        var datos = '<div id="datos'+cont+'" class="row"><div class="col-lg-4"><div class="form-group"><label for="cedula'+cont+'">Cédula *</label><div class="input-group m-b"><span class="input-group-addon sig">V-</span><input type="text" name="cedula'+cont+'" placeholder="Funcionario que obtuvo evidencia" class="form-control cedula ced" required></div></div></div><div class="col-lg-4"><div class="form-group"><label>Nombres</label><input type="text" name="nombre'+cont+'" class="form-control soloLetra" disabled="true"></div></div><div class="col-lg-4"><div class="form-group"><label for="apellido">Apellidos</label><input type="text" name="apellido'+cont+'" class="form-control soloLetra" disabled="true"></div></div></div>';

        var cont2 = cont - 1;

        $('#datos'+cont2+'').after(datos);
        event.preventDefault();

        $('.cedula').autoNumeric('init',{
            aSep: '.',
            aDec: ',',
            vMin: '0',
            vMax: '99999999'
        });

        $('.ced').on("blur", function() {
            var numero = 0;

            numero = parseInt($(this).val());

            if (numero >= 80) {
                $(this).prev('span').html("E-");
            } else {
                $(this).prev('span').html("V-");
            }
        });
    });

    $('#eliminarFuncionario').on("click", function(){
        $('#datos'+cont+'').remove();
        cont--;
        $('#cantFunc').val(cont);
    });

    $('#agregarHijo').on("click", function(event){
        contH++;

        $('#cantHijos').val(contH);

        var datos = '<div id="hijo'+contH+'"><div class="row"><div class="col-lg-4"><div class="form-group"><label>Nombres</label><input type="text" name="nombre_hijo'+contH+'" placeholder="Nombres del hijo(a)" class="form-control"></div></div><div class="col-lg-4"><div class="form-group"><label>Apellidos</label><input type="text" name="apellido_hijo'+contH+'" placeholder="Apellidos del hijo(a)" class="form-control"></div></div><div class="col-lg-4"><div class="form-group"><label>Cédula</label><div class="input-group m-b"><span class="input-group-addon">V-</span><input type="text" name="cedula_hijo'+contH+'" placeholder="Cédula" class="form-control cedula ced"></div></div></div></div><div class="row"><div class="col-lg-4"><div class="form-group calendario"><label>Fecha de nacimiento</label><div class="input-group date"><span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="fecha_hijo'+contH+'" class="form-control"value="10/11/2013"></div></div></div><div class="col-lg-8"><div class="form-group"><label>Dirección de residencia *</label><input type="text" name="residencia_hijo'+contH+'" placeholder="La Asunción, Edo. Nueva Esparta" class="form-control "></div></div></div><div class="row"><div class="col-lg-4"><div class="form-group"><label>Grupo Sanguíneo *</label><br><div class="col-lg-5"><div class="radio i-checks"><label> <input type="radio" value="O+" name="sangre_hijo'+contH+'" checked> <i></i> O+ </label></div><div class="radio i-checks"><label> <input type="radio" value="A+" name="sangre_hijo'+contH+'"> <i></i> A+ </label></div><div class="radio i-checks"><label> <input type="radio" value="B+" name="sangre_hijo'+contH+'"> <i></i> B+ </label></div><div class="radio i-checks"><label> <input type="radio" value="AB+" name="sangre_hijo'+contH+'"> <i></i> AB+ </label></div></div><div class="col-lg-5"><div class="radio i-checks"><label> <input type="radio" value="O-" name="sangre_hijo'+contH+'"> <i></i> O- </label></div><div class="radio i-checks"><label> <input type="radio" value="A-" name="sangre_hijo'+contH+'"> <i></i> A- </label></div><div class="radio i-checks"><label> <input type="radio" value="B-" name="sangre_hijo'+contH+'"> <i></i> B- </label></div><div class="radio i-checks"><label> <input type="radio" value="AB-" name="sangre_hijo'+contH+'"> <i></i> AB- </label></div></div></div></div><div class="col-lg-4"><div class="form-group"><label for="educacion_hijo1">Nivel Educativo</label><div class="radio i-checks"><label> <input type="radio" value="Primaria" name="educacion_hijo'+contH+'" checked> <i></i>';

        var datos2 = 'Primaria </label></div><div class="radio i-checks"><label> <input type="radio" value="Secundaria" name="educacion_hijo'+contH+'"> <i></i> Secundaria </label></div><div class="radio i-checks"><label> <input type="radio" value="Universitario" name="educacion_hijo'+contH+'"> <i></i> Universitario </label></div></div></div></div></div>';

        var contH2 = contH - 1;

        $('#hijo'+contH2+'').after(datos+datos2);
        event.preventDefault();

        $('.cedula').autoNumeric('init',{
            aSep: '.',
            aDec: ',',
            vMin: '0',
            vMax: '99999999'
        });

        $('.ced').on("blur", function() {
            var numero = 0;

            numero = parseInt($(this).val());

            if (numero >= 80) {
                $(this).prev('span').html("E-");
            } else {
                $(this).prev('span').html("V-");
            }
        });

        $('.calendario .input-group.date').datepicker({
            startView: 2,
            format: 'dd/mm/yyyy',
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            autoclose: true,
            endDate: '0d'
        });

        $('.i-checks').iCheck({
            checkboxClass: 'icheckbox_square-green',
            radioClass: 'iradio_square-green',
        });
    });

    $('#eliminarHijo').on("click", function(){
        $('#hijo'+contH+'').remove();
        cont--;
        $('#cantHijos').val(contH);
    });


    if ($("#soltero").is(':checked')) {
        $(".conyuge").hide();
    };

    $("#soltero").on('ifClicked', function (ev) {
        $(".conyuge").hide();
    });

    $("#casado").on('ifClicked', function (ev) {
        $(".conyuge").show();
    });

    $("#viudo").on('ifClicked', function (ev) {
        $(".conyuge").show();
    });

    $("#divorciado").on('ifClicked', function (ev) {
        $(".conyuge").show();
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
