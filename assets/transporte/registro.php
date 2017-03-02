<div class="row  border-bottom white-bg dashboard-header">
    <h2>Registro de vehículo</h2>
    <small>Patrullas, motos, autobús, bicicletas.</small>
    <br><br>
    <ol class="breadcrumb">
        <li><a href="?cargar=principal">Inicio</a></li>
        <li>Vehículo</li>
        <li class="active"><strong>Registro</strong></li>
    </ol>
</div>

<div class="wrapper wrapper-content animated fadeInRight">

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>Nuevo vehículo</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <form id="form" enctype="multipart/form-data" action="#" method="get" class="wizard-big">
                        <h1>Tipo</h1>
                        <fieldset>
                            <h2>Tipo de vehículo</h2>
                            <br>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label>Seleccione el tipo de vehículo que desea registrar</label>
                                        <br>
                                        <div class="radio i-checks"><label> <input id="patrulla" type="radio" value="Patrulla" name="tipo" checked> <i></i> Patrulla </label></div>

                                        <div class="radio i-checks"><label> <input id="moto" type="radio" value="Moto" name="tipo"> <i></i> Moto </label></div>

                                        <div class="radio i-checks"><label> <input id="autobus" type="radio" value="Autobús" name="tipo"> <i></i> Autobús </label></div>

                                        <div class="radio i-checks"><label> <input id="camion" type="radio" value="Camión" name="tipo"> <i></i> Camión </label></div>

                                        <div class="radio i-checks"><label> <input id="bicicleta" type="radio" value="Bicicleta" name="tipo"> <i></i> Bicicleta </label></div>
                                    </div>
                                </div>
                        </fieldset>

                        <h1>Datos del vehículo</h1>
                        <fieldset>
                            <div id="formPatrulla">
                                <div class="col-lg-4">
                                    <label for="marca">Marca *</label>
                                    <div class="select">
                                        <select class="form-control m-b" name="marcaPatrulla">
                                            <option value="Chery">Chery</option>
                                            <option value="Chevrolet">Chevrolet</option>
                                            <option value="Dodge">Dodge</option>
                                            <option value="Ford">Ford</option>
                                            <option value="Jeep">Jeep</option>
                                            <option value="Mitsubishi">Mitsubishi</option>
                                            <option value="Nissan">Nissan</option>
                                            <option value="Renault">Renault</option>
                                            <option value="Suzuki">Suzuki</option>
                                            <option value="Toyota">Toyota</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Modelo *</label>
                                        <input type="text" name="modeloPatrulla" placeholder="Optra" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Clave *</label>
                                        <div class="input-group m-b">
                                            <span class="input-group-addon">P-</span>
                                            <input type="text" name="clavePatrulla" placeholder="01" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Placa *</label>
                                        <input type="text" name="placaPatrulla" placeholder="0000-XXX" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Kilometraje *</label>
                                        <div class="input-group m-b">
                                            <input type="text" name="kilometrosPatrulla" placeholder="5.000" class="form-control kilometros" value="0">
                                            <span class="input-group-addon">km</span>
                                        </div>
                                    </div>
                                </div>

                                <div class="form-group">
                                    <label>Tipo de patrulla</label>
                                    <br>
                                    <div class="radio i-checks"><label> <input type="radio" value="Sedán" name="tipoPatrulla" checked> <i></i> Sedán </label></div>

                                    <div class="radio i-checks"><label> <input type="radio" value="Camioneta" name="tipoPatrulla"> <i></i> Camioneta </label></div>
                                </div>
                            </div>

                            <div id="formMoto">
                                <div class="col-lg-4">
                                    <label for="marcaMoto">Marca *</label>
                                    <div class="select">
                                        <select class="form-control m-b" name="marcaMoto" required>
                                            <option value="Bera">Bera</option>
                                            <option value="Honda">Honda</option>
                                            <option value="Kawasaki">Kawasaki</option>
                                            <option value="Keeway">Keeway</option>
                                            <option value="Kymco">Kymco</option>
                                            <option value="Suzuki">Suzuki</option>
                                            <option value="Yamaha">Yamaha</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Modelo *</label>
                                        <input type="text" name="modeloMoto" placeholder="KLR" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Clave *</label>
                                        <div class="input-group m-b">
                                            <span class="input-group-addon">M-</span>
                                            <input type="text" name="claveMoto" placeholder="01" class="form-control" required>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Placa *</label>
                                        <input type="text" name="placaMoto" placeholder="0000-XXX" class="form-control" required>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Kilometraje *</label>
                                        <div class="input-group m-b">
                                            <input type="text" name="kilometrosMoto" placeholder="5.000" class="form-control kilometros" value="0" required>
                                            <span class="input-group-addon">km</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="formAutobus">
                                <div class="col-lg-4">
                                    <label for="marca">Marca *</label>
                                    <div class="select">
                                        <select class="form-control m-b" name="marcaAutobus">
                                            <option value="Chevrolet">Chevrolet</option>
                                            <option value="Dodge">Dodge</option>
                                            <option value="Ford">Ford</option>
                                            <option value="Jeep">Jeep</option>
                                            <option value="Mitsubishi">Mitsubishi</option>
                                            <option value="Nissan">Nissan</option>
                                            <option value="Renault">Renault</option>
                                            <option value="Suzuki">Suzuki</option>
                                            <option value="Toyota">Toyota</option>
                                        </select>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Modelo *</label>
                                        <input type="text" name="modeloAutobus" placeholder="Coaster" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Clave *</label>
                                        <div class="input-group m-b">
                                            <span class="input-group-addon">P-</span>
                                            <input type="text" name="claveAutobus" placeholder="01" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Placa *</label>
                                        <input type="text" name="placaAutobus" placeholder="A0B0C0D" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Kilometraje *</label>
                                        <div class="input-group m-b">
                                            <input type="text" name="kilometrosAutobus" placeholder="5.000" class="form-control kilometros" value="0">
                                            <span class="input-group-addon">km</span>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="formCamion">

                            </div>

                            <div id="formBicicleta">

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
