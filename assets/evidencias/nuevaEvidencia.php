<div class="row  border-bottom white-bg dashboard-header">
    <h2>Registro de evidencias</h2>
    <small></small>
    <br><br>
    <ol class="breadcrumb">
        <li><a href="?cargar=principal">Inicio</a></li>
        <li class="active"><strong>Registrar evidencia</strong></li>
    </ol>
</div>

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>Formulario de registro de evidencias</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>

                <div class="ibox-content">
                    <form id="form" enctype="multipart/form-data" action="#" method="get" class="wizard-big">
                        <input id="cantFunc" type="text" name="cantidadFuncionarios" value="1" hidden="true">
                        <h1>Funcionario(s)</h1>
                        <fieldset>
                            <h2>Datos generales</h2>
                            <div id="datos1" class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="cedula">Cédula *</label>
                                        <div class="input-group m-b">
                                            <span class="input-group-addon sig">V-</span>
                                            <input type="text" name="cedula" placeholder="Funcionario que obtuvo evidencia" class="form-control cedula ced">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Nombres</label>
                                        <input type="text" name="nombre" class="form-control soloLetra" disabled="true">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="apellido">Apellidos</label>
                                        <input type="text" name="apellido" class="form-control soloLetra" disabled="true">
                                    </div>
                                </div>
                            </div>

                            <button id="agregarFuncionario" type="button" class="btn btn-primary btn-sm func"><i class="fa fa-plus"></i></button>
                            <button id="eliminarFuncionario" class="btn btn-danger btn-sm func" type="button"><i class="fa fa-minus"></i></button>
                        </fieldset>

                        <h1>Fecha, hora y dirección</h1>
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-3">
                                    <div class="form-group calendario">
                                        <label>Fecha de obtención *</label>
                                        <div class="input-group date">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" name="fechaObtenida" class="form-control" placeholder="20/01/2017">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-2">
                                    <label for="horaObtenida">Hora *</label>
                                    <div class="bfh-timepicker" data-mode="12h">
                                        <div class="form-group">
                                            <input type="text" name="horaObtenida" class="form-control" placeholder="" readonly="">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label>Ubicación donde fue obtenida *</label>
                                        <textarea rows="4" col="50" name="direccion" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                        </fieldset>


                        <h1>Tipo de evidencia</h1>
                        <fieldset>
                            <div class="row">
                                <div class="form-group">
                                    <label class="col-sm-2 control-label">Tipo de evidencia</label>
                                    <br>
                                    <div class="checkbox i-checks"><label><input type="checkbox" value=""><i></i> Estupefaciente </label></div>
                                    <div class="checkbox i-checks"><label><input type="checkbox" value=""><i></i> Armamento </label></div>
                                    <div class="checkbox i-checks"><label><input type="checkbox" value=""><i></i> Dinero </label></div>
                                    <div class="checkbox i-checks"><label><input type="checkbox" value=""><i></i> Objetos personales </label></div>
                                    <div class="checkbox i-checks"><label><input type="checkbox" value=""><i></i> Alimentos </label></div>
                                    <div class="checkbox i-checks"><label><input type="checkbox" value=""><i></i> Otro </label></div>
                                </div>
                            </div>
                        </fieldset>

                        <h1>Datos de la evidencia</h1>
                        <fieldset>
                            <div id="droga" class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="tipoDroga">Tipo de droga</label>
                                        <select class="form-control" name="tipoDroga">
                                            <option value="Marihuana">Marihuana</option>
                                            <option value="Cocaína">Cocaína</option>
                                            <option value="LCD">LCD</option>
                                            <option value="Crack">Crack</option>
                                            <option value="Heroína">Heroína</option>
                                            <option value="Anfetaminas">Anfetaminas</option>
                                            <option value="Metanfetaminas">Metanfetaminas</option>
                                            <option value="Hongos">Hongos</option>
                                            <option value="Esteroides">Esteroides</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="pesoDroga">Peso *</label>
                                        <input type="text" name="pesoDroga" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <div id="arma" class="row">

                            </div>

                            <div id="dinero" class="row">

                            </div>

                            <div id="drogas" class="row">

                            </div>

                            <div id="drogas" class="row">

                            </div>

                            <div id="drogas" class="row">

                            </div>
                        </fieldset>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="footer">
    <div class="pull-right">
        10GB of <strong>250GB</strong> Free.
    </div>
    <div>
        <strong>Copyright</strong> Example Company &copy; 2014-2015
    </div>
</div>

<script charset="UTF-8">
    $(document).ready(function(){
        $('.calendario .input-group.date').datepicker({
            startView: 2,
            format: 'dd/mm/yyyy',
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            autoclose: true,
            endDate: '0d'
        });
    });
</script>
