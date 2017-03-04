<div class="row  border-bottom white-bg dashboard-header">
    <h2>Nuevo Expediente</h2>
    <small>Registro de personal.</small>
    <br><br>
    <ol class="breadcrumb">
        <li><a href="?cargar=principal">Inicio</a></li>
        <li class="active"><strong>Nevo Personal</strong></li>
    </ol>
</div>



<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>Nuevo personal</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>

                <div class="ibox-content">
                    <form id="formPersonal" enctype="multipart/form-data" action="#" method="get">
                        <h2>Datos generales</h2>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="cedula">Cédula *</label>

                                    <div class="input-group m-b">
                                        <span id="signo_funcionario" class="input-group-addon signo">V-</span>
                                        <input id="cedula_funcionario" type="text" name="cedula" placeholder="Cédula" class="form-control cedula">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Nombres *</label>
                                    <input type="text" name="nombre" placeholder="Nombres del funcionario" class="form-control soloLetra">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="apellido">Apellidos *</label>
                                    <input type="text" name="apellido" placeholder="Apellidos del funcionario" class="form-control soloLetra">
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label for="rif">RIF *</label>

                                    <div class="input-group m-b">
                                        <span class="input-group-addon signo">V-</span>
                                        <input type="text" name="rif" placeholder="RIF" class="form-control rif">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Sexo *</label>
                                    <br>
                                    <div class="radio i-checks"><label> <input type="radio" value="m" name="sexo" checked> <i></i> Masculino </label></div>

                                    <div class="radio i-checks"><label> <input type="radio" value="f" name="sexo"> <i></i> Femenino </label></div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Teléfono móvil *</label>
                                    <div class="input-group m-b">
                                        <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                        <input type="text" name="telefono1" placeholder="(04XX)-555-5555" class="form-control telefono">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <br>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label>Tipo</label>
                                    <br>
                                    <div class="radio i-checks"><label> <input id="directivo" type="radio" value="directivo" name="tipo" checked> <i></i> Directivo </label></div>

                                    <div class="radio i-checks"><label> <input id="administrativo" type="radio" value="administrativo" name="tipo"> <i></i> Administrativo </label></div>

                                    <div class="radio i-checks"><label> <input id="policia" type="radio" value="policia" name="tipo"> <i></i> Funcionario policial </label></div>

                                    <div class="radio i-checks"><label> <input id="obrero" type="radio" value="obrero" name="tipo"> <i></i> Obrero </label></div>

                                    <div class="radio i-checks"><label> <input id="contratado" type="radio" value="contratado" name="tipo"> <i></i> Contratado </label></div>
                                </div>
                            </div>
                        </div>

                        <h2>Datos específicos</h2>
                        <div id="formdDirectivo">
                            <div class="col-lg-4">
                                <label for="departamentoDirectivo">Departamento *</label>
                                <select class="form-control m-b" name="departamentoDirectivo">
                                    <option value="administacion">Administración y gestión</option>
                                    <option value="victima">Atención a la Víctima</option>
                                    <option value="atencionNinos">Atención de Niños, Niñas y Adolescentes</option>
                                    <option value="operaciones">Centro de Operaciones Policiales</option>
                                    <option value="consultoria">Consultoría Jurídica</option>
                                    <option value="coordPolicial">Coordinación Policial</option>
                                    <option value="direccion">Dirección General</option>
                                    <option value="genero">Igualdad de Género</option>
                                    <option value="actuacion">Inspectoría para el control de la Actuación Policial</option>
                                    <option value="desviaciones">Investigaciones de las Desviaciones Policiales</option>
                                    <option value="investigaciones">Investigaciones y Procesamiento Policial</option>
                                    <option value="armas">Parque de armas</option>
                                    <option value="rrhh">Recursos Humanos</option>
                                    <option value="evidencias">Sala de evidencias</option>
                                    <option value="detenidos">Sala de Detención Transitoria de Detenidos</option>
                                    <option value="transporte">Transporte y Logística</option>
                                    <option value="patrullaje">Vigilancia y Patrullaje</option>
                                </select>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group calendario">
                                    <label>Fecha de ingreso *</label>
                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="text" name="ingresoDirectivo" class="form-control" placeholder="20/01/2017">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="formAdministrativo">
                            <div class="col-lg-4">
                                <label for="departamentoAdministrativo">Departamento *</label>
                                <select class="form-control m-b" name="departamentoAdministrativo">
                                    <option value="administacion">Administración y gestión</option>
                                    <option value="victima">Atención a la Víctima</option>
                                    <option value="atencionNinos">Atención de Niños, Niñas y Adolescentes</option>
                                    <option value="operaciones">Centro de Operaciones Policiales</option>
                                    <option value="consultoria">Consultoría Jurídica</option>
                                    <option value="coordPolicial">Coordinación Policial</option>
                                    <option value="direccion">Dirección General</option>
                                    <option value="genero">Igualdad de Género</option>
                                    <option value="actuacion">Inspectoría para el control de la Actuación Policial</option>
                                    <option value="desviaciones">Investigaciones de las Desviaciones Policiales</option>
                                    <option value="investigaciones">Investigaciones y Procesamiento Policial</option>
                                    <option value="armas">Parque de armas</option>
                                    <option value="rrhh">Recursos Humanos</option>
                                    <option value="evidencias">Sala de evidencias</option>
                                    <option value="detenidos">Sala de Detención Transitoria de Detenidos</option>
                                    <option value="transporte">Transporte y Logística</option>
                                    <option value="patrullaje">Vigilancia y Patrullaje</option>
                                </select>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group calendario">
                                    <label>Fecha de ingreso *</label>
                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="text" name="ingresoAdministrativo" class="form-control" placeholder="20/01/2017">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="formPolicia">
                            <div class="col-lg-4">
                                <label for="rango">Rango *</label>
                                <select class="form-control m-b" name="rango">
                                    <option value="oficial">Oficial</option>
                                    <option value="oficialA">Oficial Agregado</option>
                                    <option value="oficialJ">Oficial Jefe</option>

                                    <option value="supervisor">Supervisor</option>
                                    <option value="supervisorA">Supervisor Agregado</option>
                                    <option value="supervisorJ">Supervisor Jefe</option>

                                    <option value="comisionado">Comisionado</option>
                                    <option value="comisionadoA">Comisionado Agregado</option>
                                    <option value="comisionadoJ">Comisionado Jefe</option>
                                </select>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group calendario">
                                    <label>Fecha de ingreso *</label>
                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="text" name="ingresoPolicia" class="form-control" placeholder="20/01/2017">
                                    </div>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <label for="cargo">Cargo *</label>
                                <select class="form-control m-b" name="cargo">
                                    <option value="funcionario">Funcionario</option>
                                    <option value="administrativo">Administrativo</option>
                                    <option value="directivo">Directivo</option>
                                </select>
                            </div>

                            <div class="col-lg-4">
                                <label for="departamentoPolicia">Departamento *</label>
                                <select class="form-control m-b" name="departamentoPolicia">
                                    <option value="administacion">Administración y gestión</option>
                                    <option value="victima">Atención a la Víctima</option>
                                    <option value="atencionNinos">Atención de Niños, Niñas y Adolescentes</option>
                                    <option value="operaciones">Centro de Operaciones Policiales</option>
                                    <option value="consultoria">Consultoría Jurídica</option>
                                    <option value="coordPolicial">Coordinación Policial</option>
                                    <option value="direccion">Dirección General</option>
                                    <option value="genero">Igualdad de Género</option>
                                    <option value="actuacion">Inspectoría para el control de la Actuación Policial</option>
                                    <option value="desviaciones">Investigaciones de las Desviaciones Policiales</option>
                                    <option value="investigaciones">Investigaciones y Procesamiento Policial</option>
                                    <option value="armas">Parque de armas</option>
                                    <option value="rrhh">Recursos Humanos</option>
                                    <option value="evidencias">Sala de evidencias</option>
                                    <option value="detenidos">Sala de Detención Transitoria de Detenidos</option>
                                    <option value="transporte">Transporte y Logística</option>
                                    <option value="patrullaje">Vigilancia y Patrullaje</option>
                                </select>
                            </div>
                        </div>

                        <div id="formObrero">
                            <div class="col-lg-4">
                                <label for="grado">Grado *</label>
                                <select class="form-control m-b" name="grado">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group calendario">
                                    <label>Fecha de ingreso *</label>
                                    <div class="input-group date">
                                        <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                        <input type="text" name="ingresoObrero" class="form-control" placeholder="20/01/2017">
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div id="formContratado">
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="departamentoDirectivo">Departamento *</label>
                                    <select class="form-control m-b" name="departamento">
                                        <option value="administacion">Administración y gestión</option>
                                        <option value="victima">Atención a la Víctima</option>
                                        <option value="atencionNinos">Atención de Niños, Niñas y Adolescentes</option>
                                        <option value="operaciones">Centro de Operaciones Policiales</option>
                                        <option value="consultoria">Consultoría Jurídica</option>
                                        <option value="coordPolicial">Coordinación Policial</option>
                                        <option value="direccion">Dirección General</option>
                                        <option value="genero">Igualdad de Género</option>
                                        <option value="actuacion">Inspectoría para el control de la Actuación Policial</option>
                                        <option value="desviaciones">Investigaciones de las Desviaciones Policiales</option>
                                        <option value="investigaciones">Investigaciones y Procesamiento Policial</option>
                                        <option value="armas">Parque de armas</option>
                                        <option value="rrhh">Recursos Humanos</option>
                                        <option value="evidencias">Sala de evidencias</option>
                                        <option value="detenidos">Sala de Detención Transitoria de Detenidos</option>
                                        <option value="transporte">Transporte y Logística</option>
                                        <option value="patrullaje">Vigilancia y Patrullaje</option>
                                    </select>
                                </div>

                                <div class="col-lg-8">
                                    <label>Contrato</label>
                                    <div class="input-group input-daterange">
                                        <div class="input-group-addon">Inicio</div>
                                        <input type="text" class="form-control" name="inicioContrato" placeholder="05/04/2012">
                                        <div class="input-group-addon">fin</div>
                                        <input type="text" class="form-control" name="finContrato" placeholder="19/04/2012">
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group calendario">
                                        <label>Fecha de ingreso *</label>
                                        <div class="input-group date">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" name="ingresoContratado" class="form-control" placeholder="20/01/2017">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
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


        $('.postal').blur(function(){
            var codigo = $(this).val();

            codigo = parseInt(codigo);

            if (codigo == 6301 || codigo == 6309 || codigo == 6316 || codigo == 6318 || codigo == 6320 || codigo == 6321 || codigo == 6304) {
                $('.postal').attr("style", "background-color: green");
            }else {
                $('.postal').attr("style", "background-color: red");
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

        $('.input-daterange').datepicker({
            startView: 2,
            format: 'dd/mm/yyyy',
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            autoclose: true
        });
    });
</script>
