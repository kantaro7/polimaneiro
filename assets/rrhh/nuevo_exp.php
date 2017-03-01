
<div class="row  border-bottom white-bg dashboard-header">
    <h2>Nuevo Expediente</h2>
    <small>Registro de expediente de funcionario policial.</small>
    <br><br>
    <ol class="breadcrumb">
        <li><a href="?cargar=principal">Inicio</a></li>
        <li class="active"><strong>Nevo Expediente</strong></li>
    </ol>
</div>

<div class="row">
    <div class="col-lg-12">
        <div class="wrapper wrapper-content">
            <div class="row">

                <div class="col-lg-6">
                    <!-- Seccion Primera -->
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins collapsed">
                            <div class="ibox-title">
                                <h5>1. Datos personales</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                                </div>
                            </div>

                            <div class="ibox-content">
                                <form id="form" class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Nombres</label>
                                        <div class="col-lg-9"><input type="text" placeholder="Nombres del funcionario" class="form-control" required></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Apellidos</label>
                                        <div class="col-lg-9"><input type="text" placeholder="Apellidos del funcionario" class="form-control" required></div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">C&eacutedula</label>
                                        <div class="col-lg-9">
                                            <div class="input-group m-b">
                                                <span id="signo_funcionario" class="input-group-addon signo">V-</span>
                                                <input id="cedula_funcionario" type="text" name="cedula" placeholder="Cédula" class="form-control cedula" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group" id="data_3">
                                        <label class="col-lg-3 control-label">Fecha de nacimiento</label>
                                        <div class="col-lg-9">
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="10/11/2013" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Tel&eacutefono</label>
                                        <div class="col-lg-9">
                                            <div class="input-group m-b">
                                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                <input type="text" name="telefono" placeholder="(04XX)-555-5555" class="form-control telefono" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Tel&eacutefono</label>
                                        <div class="col-lg-9">
                                            <div class="input-group m-b">
                                                <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                                                <input type="text" name="telefono" placeholder="(04XX)-555-5555" class="form-control telefono">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-4">

                                        </div>
                                        <div class="col-lg-5">
                                            <button class="btn btn-sm btn-white" type="reset">Limpiar</button>
                                            <button class="btn btn-sm btn-success" type="submit">Guardar</button>
                                        </div>
                                        <div class="col-lg-3">

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Seccion Segunda -->
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins collapsed">
                            <div class="ibox-title">
                                <h5>2. Datos familiares</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="ibox-content">
                                <!-- Datos del conyugue -->
                                <h4>Datos del c&oacutenyugue</h4>
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Nombres</label>
                                        <div class="col-lg-9"><input type="text" placeholder="Nombres del funcionario" class="form-control"></div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Apellidos</label>
                                        <div class="col-lg-9"><input type="text" placeholder="Apellidos del funcionario" class="form-control"></div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">C&eacutedula</label>
                                        <div class="col-lg-9">
                                            <div class="input-group m-b">
                                                <span id="signo_conyugue" class="input-group-addon signo">V-</span>
                                                <input id="cedula_conyugue" type="text" name="cedula" placeholder="Cédula" class="form-control cedula">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group" id="data_3">
                                        <label class="col-lg-3 control-label">Fecha de nacimiento</label>
                                        <div class="col-lg-9">
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="10/11/2013">
                                            </div>
                                        </div>
                                    </div>


                                <div class="hr-line-dashed"></div>

                                <!-- Datos de los hijos -->
                                <h4>Datos de los hijos</h4>
                                <div class="hijos">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Nombres</label>
                                        <div class="col-lg-9"><input type="text" name="nombre_hijo1" placeholder="Nombres del hijo(a)" class="form-control"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Apellidos</label>
                                        <div class="col-lg-9"><input type="text" name="apellido_hijo1" placeholder="Apellidos del hijo(a)" class="form-control"></div>
                                    </div>

                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">C&eacutedula</label>
                                        <div class="col-lg-9">
                                            <div class="input-group m-b">
                                                <span id="signo_hijo1" class="input-group-addon signo">V-</span>
                                                <input id="cedula_hijo1" type="text" name="cedula_hijo1" placeholder="Cédula" class="form-control cedula">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group" id="data_3">
                                        <label class="col-lg-3 control-label">Fecha de nacimiento</label>
                                        <div class="col-lg-9">
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="fecha_hijo1" class="form-control" value="10/11/2013">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="hr-line-dashed"></div>

                                <div id="espacio">
                                    <h4>Agregar hijo</h4>
                                </div>
                                <br>
                                <!-- <input type="button" value="Preview form" class="add" id="preview" /> -->
                                <!-- <button class="btn btn-success add" id="agregar"><i class="fa fa-plus" aria-hidden="true"></i></button> -->
                                <input type="button" value="Add a field" class="add" id="agregar" />
                                <input type="button" value="Delete a field" class="delete" id="borrar" />



                                <div class="hr-line-dashed"></div>

                                <!-- Datos del padre -->
                                <h4>Datos del padre</h4>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Nombres</label>
                                        <div class="col-lg-9"><input type="text" placeholder="Nombres del funcionario" class="form-control"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Apellidos</label>
                                        <div class="col-lg-9"><input type="text" placeholder="Apellidos del funcionario" class="form-control"></div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">C&eacutedula</label>
                                        <div class="col-lg-9">
                                            <div class="input-group m-b">
                                                <span id="signo_padre" class="input-group-addon signo">V-</span>
                                                <input id="cedula_padre" type="text" name="cedula" placeholder="Cédula" class="form-control cedula" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group" id="data_3">
                                        <label class="col-lg-3 control-label">Fecha de nacimiento</label>
                                        <div class="col-lg-9">
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="10/11/2013">
                                            </div>
                                        </div>
                                    </div>


                                <div class="hr-line-dashed"></div>

                                <!-- Datos de la madre -->
                                <h4>Datos de la madre</h4>
                                <form class="form-horizontal">
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Nombres</label>
                                        <div class="col-lg-9"><input type="text" placeholder="Nombres del funcionario" class="form-control"></div>
                                    </div>
                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">Apellidos</label>
                                        <div class="col-lg-9"><input type="text" placeholder="Apellidos del funcionario" class="form-control"></div>
                                    </div>


                                    <div class="form-group">
                                        <label class="col-lg-3 control-label">C&eacutedula</label>
                                        <div class="col-lg-9">
                                            <div class="input-group m-b">
                                                <span id="signo_madre" class="input-group-addon signo">V-</span>
                                                <input id="cedula_madre" type="text" name="cedula" placeholder="Cédula" class="form-control cedula" required>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group" id="data_3">
                                        <label class="col-lg-3 control-label">Fecha de nacimiento</label>
                                        <div class="col-lg-9">
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" class="form-control" value="10/11/2013">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="form-group">
                                        <div class="col-lg-4">

                                        </div>
                                        <div class="col-lg-4">
                                            <button class="btn btn-sm btn-white" type="reset">Limpiar</button>
                                            <button class="btn btn-sm btn-success" type="submit">Guardar</button>
                                        </div>
                                        <div class="col-lg-4">

                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- Seccion Tercera -->
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins collapsed">
                            <div class="ibox-title">
                                <h5>3. Datos relativos al servicio militar o civil</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="ibox-content">

                            </div>
                        </div>
                    </div>

                    <!-- Seccion Cuarta -->
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins collapsed">
                            <div class="ibox-title">
                                <h5>4. Documentos sobre el ingreso</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="ibox-content">

                            </div>
                        </div>
                    </div>

                    <!-- Seccion Quinta -->
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins collapsed">
                            <div class="ibox-title">
                                <h5>5. Desarrollo de la carrera policial</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="ibox-content">

                            </div>
                        </div>
                    </div>

                    <!-- Seccion Sexta -->
                    <div class="col-lg-12">
                        <div class="ibox float-e-margins collapsed">
                            <div class="ibox-title">
                                <h5>6. R&eacutegimen de remuneraciones y beneficios laborales</h5>
                                <div class="ibox-tools">
                                    <a class="collapse-link">
                                        <i class="fa fa-chevron-up"></i>
                                    </a>
                                </div>
                            </div>

                            <div class="ibox-content">

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <!-- Seccion Septima -->
                    <div class="col-lg-12">
                       <div class="ibox float-e-margins collapsed">
                          <div class="ibox-title">
                             <h5>7. Situaciones administrativas</h5>
                             <div class="ibox-tools">
                                <a class="collapse-link">
                                   <i class="fa fa-chevron-up"></i>
                                </a>
                             </div>
                          </div>

                          <div class="ibox-content">
                             <div>
                                <div class="pull-right text-right">
                                   <span class="bar_dashboard">5,3,9,6,5,9,7,3,5,2,4,7,3,2,7,9,6,4,5,7,3,2,1,0,9,5,6,8,3,2,1</span>
                                   <br/>
                                   <small class="font-bold">$ 20 054.43</small>
                                </div>
                                <h4>NYS report new data!
                                   <br/>
                                   <small class="m-r"><a href="../graph_flot.html"> Check the stock price! </a> </small>
                                </h4>
                             </div>
                          </div>
                       </div>
                    </div>

                    <!-- Seccion Octava -->
                    <div class="col-lg-12">
                       <div class="ibox float-e-margins collapsed">
                          <div class="ibox-title">
                             <h5>8. Egreso del Cuerpo Policial</h5>
                             <div class="ibox-tools">
                                <a class="collapse-link">
                                   <i class="fa fa-chevron-up"></i>
                                </a>
                             </div>
                          </div>

                          <div class="ibox-content">
                             <div>
                                <div class="pull-right text-right">
                                   <span class="bar_dashboard">5,3,9,6,5,9,7,3,5,2,4,7,3,2,7,9,6,4,5,7,3,2,1,0,9,5,6,8,3,2,1</span>
                                   <br/>
                                   <small class="font-bold">$ 20 054.43</small>
                                </div>
                                <h4>NYS report new data!
                                   <br/>
                                   <small class="m-r"><a href="../graph_flot.html"> Check the stock price! </a> </small>
                                </h4>
                             </div>
                          </div>
                       </div>
                    </div>

                    <!-- Seccion Novena -->
                    <div class="col-lg-12">
                       <div class="ibox float-e-margins collapsed">
                          <div class="ibox-title">
                             <h5>9. R&eacutegimen Disciplinario</h5>
                             <div class="ibox-tools">
                                <a class="collapse-link">
                                   <i class="fa fa-chevron-up"></i>
                                </a>
                             </div>
                          </div>

                          <div class="ibox-content">
                             <div>
                                <div class="pull-right text-right">
                                   <span class="bar_dashboard">5,3,9,6,5,9,7,3,5,2,4,7,3,2,7,9,6,4,5,7,3,2,1,0,9,5,6,8,3,2,1</span>
                                   <br/>
                                   <small class="font-bold">$ 20 054.43</small>
                                </div>
                                <h4>NYS report new data!
                                   <br/>
                                   <small class="m-r"><a href="../graph_flot.html"> Check the stock price! </a> </small>
                                </h4>
                             </div>
                          </div>
                       </div>
                    </div>

                    <!-- Seccion Decima -->
                    <div class="col-lg-12">
                       <div class="ibox float-e-margins collapsed">
                          <div class="ibox-title">
                             <h5>10. Ex&aacutemenes M&eacutedicos</h5>
                             <div class="ibox-tools">
                                <a class="collapse-link">
                                   <i class="fa fa-chevron-up"></i>
                                </a>
                             </div>
                          </div>

                          <div class="ibox-content">
                             <div>
                                <div class="pull-right text-right">
                                   <span class="bar_dashboard">5,3,9,6,5,9,7,3,5,2,4,7,3,2,7,9,6,4,5,7,3,2,1,0,9,5,6,8,3,2,1</span>
                                   <br/>
                                   <small class="font-bold">$ 20 054.43</small>
                                </div>
                                <h4>NYS report new data!
                                   <br/>
                                   <small class="m-r"><a href="../graph_flot.html"> Check the stock price! </a> </small>
                                </h4>
                             </div>
                          </div>
                       </div>
                    </div>

                    <!-- Seccion Onceava -->
                    <div class="col-lg-12">
                       <div class="ibox float-e-margins collapsed">
                          <div class="ibox-title">
                             <h5>11. R&eacutegimen de seguridad social</h5>
                             <div class="ibox-tools">
                                <a class="collapse-link">
                                   <i class="fa fa-chevron-up"></i>
                                </a>
                             </div>
                          </div>

                          <div class="ibox-content">
                             <div>
                                <div class="pull-right text-right">
                                   <span class="bar_dashboard">5,3,9,6,5,9,7,3,5,2,4,7,3,2,7,9,6,4,5,7,3,2,1,0,9,5,6,8,3,2,1</span>
                                   <br/>
                                   <small class="font-bold">$ 20 054.43</small>
                                </div>
                                <h4>NYS report new data!
                                   <br/>
                                   <small class="m-r"><a href="../graph_flot.html"> Check the stock price! </a> </small>
                                </h4>
                             </div>
                          </div>
                       </div>
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
</div>

<script>
    $(document).ready(function(){

        $('#data_1 .input-group.date').datepicker({
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            calendarWeeks: true,
            autoclose: true
        });

        $('#data_2 .input-group.date').datepicker({
            startView: 1,
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            autoclose: true
        });

        $('#data_3 .input-group.date').datepicker({
            startView: 2,
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            autoclose: true
        });

        $('#data_4 .input-group.date').datepicker({
            minViewMode: 1,
            keyboardNavigation: false,
            forceParse: false,
            autoclose: true,
            todayHighlight: true
        });

        $('#data_5 .input-daterange').datepicker({
            keyboardNavigation: false,
            forceParse: false,
            autoclose: true
        });



    });
</script>
