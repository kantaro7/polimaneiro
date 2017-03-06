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
                    <form class="formSimple" enctype="multipart/form-data" action="#" method="get">
                        <div class="formCuerpo">

                            <h2>Datos generales</h2>
                            <input id="cantFunc" type="text" name="cantidadFuncionarios" value="1" hidden="true">
                            <div id="datos1" class="row">

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="cedula">Cédula *</label>
                                        <div class="input-group m-b">
                                            <span class="input-group-addon sig">V-</span>
                                            <input type="text" name="cedula" placeholder="Funcionario que obtuvo evidencia" class="form-control cedula ced" required>
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

                            <button id="agregarFuncionario" type="button" class="btn btn-primary btn-sm"><i class="fa fa-plus"></i></button>
                            <button id="eliminarFuncionario" class="btn btn-danger btn-sm" type="button"><i class="fa fa-minus"></i></button>

                        </div>
                        <div class="row">
                            <input id="btn-guardar" type="submit" name="guardar" value="Finalizar" class="btn btn-primary">
                            <input id="btn-limpiar" type="reset" name="limpiar" value="Limpiar" class="btn btn-danger">
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
