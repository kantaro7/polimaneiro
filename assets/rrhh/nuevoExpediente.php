<div class="row  border-bottom white-bg dashboard-header">
    <h2>Nuevo Expediente</h2>
    <small>Registro de expediente de funcionario policial.</small>
    <br><br>
    <ol class="breadcrumb">
        <li><a href="?cargar=principal">Inicio</a></li>
        <li class="active"><strong>Nevo Expediente</strong></li>
    </ol>
</div>



<div class="wrapper wrapper-content animated fadeInRight">

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox">
                <div class="ibox-title">
                    <h5>Nuevo expediente</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">
                    <h2>
                        Expediente de funcionario policial
                    </h2>
                    <p>
                        Deberá completar los datos de cada sección antes de avanzar a la siguiente. Puede guardar la información para continuar en cualquier momento en el módulo 'Editar Expediente'.
                    </p>

                    <form id="form" enctype="multipart/form-data" action="#" method="get" class="wizard-big">
                        <h1>Datos Personales</h1>
                        <fieldset>
                            <h2>Información personal</h2>
                            <br>
                            <div class="row">
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

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="cedula">Cédula *</label>

                                        <div class="input-group m-b">
                                            <span class="input-group-addon">V-</span>
                                            <input type="text" name="cedula" placeholder="Cédula" class="form-control cedula ced">
                                        </div>
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

                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label>Sexo *</label>
                                        <br>
                                        <div class="radio i-checks"><label> <input type="radio" value="m" name="sexo" checked> <i></i> Masculino </label></div>

                                        <div class="radio i-checks"><label> <input type="radio" value="f" name="sexo"> <i></i> Femenino </label></div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label>Lugar de nacimiento *</label>
                                        <input type="text" name="nacimiento" placeholder="La Asunción, Edo. Nueva Esparta" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group" id="mayorEdad">
                                        <label>Fecha de nacimiento *</label>
                                        <div class="input-group date">
                                            <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                            <input type="text" name="f_nacimiento" class="form-control" placeholder="20/01/2017">
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Estado civil *</label>
                                        <br>
                                        <div class="radio i-checks estado"><label> <input id="soltero" type="radio" value="Soltero" name="estado" checked> <i></i> Soltero </label></div>

                                        <div class="radio i-checks"><label> <input id="casado" type="radio" value="Casado" name="estado"> <i></i> Casado </label></div>

                                        <div class="radio i-checks"><label> <input id="viudo" type="radio" value="Viudo" name="estado"> <i></i> Viudo </label></div>

                                        <div class="radio i-checks"><label> <input id="divorciado" type="radio" value="Divorciado" name="estado"> <i></i> Divorciado </label></div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Grupo Sanguíneo *</label>
                                        <br>
                                        <div class="col-lg-5">
                                            <div class="radio i-checks"><label> <input type="radio" value="O+" name="sangre" checked> <i></i> O+ </label></div>

                                            <div class="radio i-checks"><label> <input type="radio" value="A+" name="sangre"> <i></i> A+ </label></div>

                                            <div class="radio i-checks"><label> <input type="radio" value="B+" name="sangre"> <i></i> B+ </label></div>

                                            <div class="radio i-checks"><label> <input type="radio" value="AB+" name="sangre"> <i></i> AB+ </label></div>
                                        </div>

                                        <div class="col-lg-5">
                                            <div class="radio i-checks"><label> <input type="radio" value="O-" name="sangre"> <i></i> O- </label></div>

                                            <div class="radio i-checks"><label> <input type="radio" value="A-" name="sangre"> <i></i> A- </label></div>

                                            <div class="radio i-checks"><label> <input type="radio" value="B-" name="sangre"> <i></i> B- </label></div>

                                            <div class="radio i-checks"><label> <input type="radio" value="AB-" name="sangre"> <i></i> AB- </label></div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-lg-8">
                                    <div class="form-group">
                                        <label>Dirección de residencia *</label>
                                        <input type="text" name="residencia" placeholder="La Asunción, Edo. Nueva Esparta" class="form-control">
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group" id="codPostal">
                                        <label>Código postal *</label>
                                        <input type="text" name="zip" class="form-control postal" placeholder="Código postal">
                                    </div>
                                </div>
                            </div>

                            <br>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label>Teléfono móvil *</label>
                                        <div class="input-group m-b">
                                            <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                            <input type="text" name="telefono1" placeholder="(04XX)-555-5555" class="form-control telefono">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label >Teléfono de residencia *</label>
                                        <div class="input-group m-b">
                                            <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                                            <input type="text" name="telefono2" placeholder="(04XX)-555-5555" class="form-control telefono">
                                        </div>
                                    </div>
                                </div>

                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="correo">Correo electrónico *</label>
                                        <input type="email" name="correo" placeholder="nombre@proveedor.com" class="form-control">
                                    </div>
                                </div>
                            </div>

                            <br>

                            <h2>Uniforme Policial</h2>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="camisa">Camisa</label>
                                    <div class="select">
                                        <select class="form-control m-b" name="camisa">
                                            <option value="XS">XS</option>
                                            <option value="S">S</option>
                                            <option value="M">M</option>
                                            <option value="L">L</option>
                                            <option value="XL">XL</option>
                                            <option value="XXL">XXL</option>
                                            <option value="XXXL">XXXL</option>
                                        </select>
                                    </div>

                                </div>

                                <div class="col-lg-4">
                                    <label for="pantalon">Pantalón</label>
                                    <select class="form-control m-b" name="pantalon">
                                        <option value="28">28</option>
                                        <option value="30">30</option>
                                        <option value="32">32</option>
                                        <option value="34">34</option>
                                        <option value="36">36</option>
                                        <option value="38">38</option>
                                        <option value="40">40</option>
                                        <option value="42">42</option>
                                        <option value="46">46</option>
                                    </select>
                                </div>

                                <div class="col-lg-4">
                                    <label for="calzado">Calzado</label>
                                    <select class="form-control m-b" name="calzado">
                                        <option value="28">28</option>
                                        <option value="30">30</option>
                                        <option value="32">32</option>
                                        <option value="34">34</option>
                                        <option value="36">36</option>
                                        <option value="38">38</option>
                                        <option value="40">40</option>
                                        <option value="42">42</option>
                                        <option value="46">46</option>
                                    </select>
                                </div>
                            </div>
                            <br>

                            <h2>Archivos</h2>

                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="partida">Partida de nacimiento</label>
                                    <input type="file" name="archivo" class="form-control">
                                </div>
                                <div class="col-lg-4">
                                    <label for="carta_res">Carta de residencia</label>
                                    <input type="file" name="archivo" class="form-control">
                                </div>
                                <div class="col-lg-4">
                                    <label for="foto_carnet">Foto carnet</label>
                                    <input type="file" name="archivo" class="form-control">
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="archivo">Prueba psicologica</label>
                                    <input type="file" name="archivo" class="form-control">
                                </div>
                                <div class="col-lg-4">
                                    <label for="archivo">Prueba física</label>
                                    <input type="file" name="archivo" class="form-control">
                                </div>
                                <div class="col-lg-4">
                                    <label for="archivo">Prueba médica</label>
                                    <input type="file" name="archivo" class="form-control">
                                </div>
                            </div>
                            <br>

                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="archivo">Prueba de entrevista de ingreso</label>
                                    <input type="file" name="archivo" class="form-control">
                                </div>
                                <div class="col-lg-4">
                                    <label for="archivo">Acta de nombramiento</label>
                                    <input type="file" name="archivo" class="form-control">
                                </div>
                                <div class="col-lg-4">
                                    <label for="archivo">Licencia de conducir</label>
                                    <input type="file" name="archivo" class="form-control">
                                </div>
                            </div>


                        </fieldset>

                        <h1>Datos Familiares</h1>
                        <fieldset>

                            <div class="conyugue">
                                <h2>Datos del cónyugue</h2>
                                <br>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Nombres *</label>
                                            <input type="text" name="nombre_conyugue" placeholder="Nombres del conyugue" class="form-control ">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="apellido">Apellidos *</label>
                                            <input type="text" name="apellido_conyugue" placeholder="Apellidos del conyugue" class="form-control ">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="cedula">Cédula *</label>

                                            <div class="input-group m-b">
                                                <span class="input-group-addon">V-</span>
                                                <input type="text" name="cedula_conyugue" placeholder="Cédula" class="form-control cedula ced">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label>Lugar de nacimiento *</label>
                                            <input type="text" name="nacimiento_conyugue" placeholder="La Asunción, Edo. Nueva Esparta" class="form-control ">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group" id="mayorEdad">
                                            <label>Fecha de nacimiento *</label>
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <input type="text" name="f_nacimiento_conyugue" class="form-control " placeholder="20/01/2017">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="col-lg-12">
                                        <div class="form-group">
                                            <label>Dirección de residencia *</label>
                                            <input type="text" name="residencia_conyugue" placeholder="La Asunción, Edo. Nueva Esparta" class="form-control ">
                                        </div>
                                    </div>
                                </div>

                                <br>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Teléfono móvil *</label>
                                            <div class="input-group m-b">
                                                <span class="input-group-addon"><i class="fa fa-phone"></i></span>
                                                <input type="text" name="telefono1_conyugue" placeholder="(04XX)-555-5555" class="form-control telefono ">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Teléfono de residencia *</label>
                                            <div class="input-group m-b">
                                                <span class="input-group-addon"><i class="fa fa-mobile"></i></span>
                                                <input type="text" name="telefono2_conyugue" placeholder="(04XX)-555-5555" class="form-control telefono ">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="correo">Correo electrónico *</label>
                                            <input type="email" name="correo_conyugue" placeholder="nombre@proveedor.com" class="form-control ">
                                        </div>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Grupo Sanguíneo *</label>
                                            <br>
                                            <div class="col-lg-5">
                                                <div class="radio i-checks"><label> <input type="radio" value="O+" name="sangre_conyugue" checked> <i></i> O+ </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="A+" name="sangre_conyugue"> <i></i> A+ </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="B+" name="sangre_conyugue"> <i></i> B+ </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="AB+" name="sangre_conyugue"> <i></i> AB+ </label></div>
                                            </div>

                                            <div class="col-lg-5">
                                                <div class="radio i-checks"><label> <input type="radio" value="O-" name="sangre_conyugue"> <i></i> O- </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="A-" name="sangre_conyugue"> <i></i> A- </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="B-" name="sangre_conyugue"> <i></i> B- </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="AB-" name="sangre_conyugue"> <i></i> AB- </label></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="educacion_conyugue">Nivel Educativo</label>
                                            <div class="radio i-checks"><label> <input type="radio" value="Primaria" name="educacion_conyugue"> <i></i> Primaria </label></div>

                                            <div class="radio i-checks"><label> <input type="radio" value="Secundaria" name="educacion_conyugue"> <i></i> Secundaria </label></div>

                                            <div class="radio i-checks"><label> <input type="radio" value="Universitaria" name="educacion_conyugue"> <i></i> Universitario </label></div>

                                        </div>
                                    </div>
                                </div>
                            </div>
                            <br>

                            <h2>Datos de los hijos e hijas</h2>
                            <input type="hidden" name="cant_hijos" id="cant_hijos">
                            <br>
                            <div class="hijos">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Nombres</label>
                                            <input type="text" name="nombre_hijo1" placeholder="Nombres del hijo(a)" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Apellidos</label>
                                            <input type="text" name="apellido_hijo1" placeholder="Apellidos del hijo(a)" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Cédula</label>
                                            <div class="input-group m-b">
                                                <span class="input-group-addon">V-</span>
                                                <input type="text" name="cedula_hijo1" placeholder="Cédula" class="form-control cedula ced">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group calendario">
                                            <label>Fecha de nacimiento</label>
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="fecha_hijo1" class="form-control" value="10/11/2013">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label>Dirección de residencia *</label>
                                            <input type="text" name="residencia_hijo1" placeholder="La Asunción, Edo. Nueva Esparta" class="form-control ">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Grupo Sanguíneo *</label>
                                            <br>
                                            <div class="col-lg-5">
                                                <div class="radio i-checks"><label> <input type="radio" value="O+" name="sangre_hijo1" checked> <i></i> O+ </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="A+" name="sangre_hijo1"> <i></i> A+ </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="B+" name="sangre_hijo1"> <i></i> B+ </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="AB+" name="sangre_hijo1"> <i></i> AB+ </label></div>
                                            </div>

                                            <div class="col-lg-5">
                                                <div class="radio i-checks"><label> <input type="radio" value="O-" name="sangre_hijo1"> <i></i> O- </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="A-" name="sangre_hijo1"> <i></i> A- </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="B-" name="sangre_hijo1"> <i></i> B- </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="AB-" name="sangre_hijo1"> <i></i> AB- </label></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="educacion_hijo1">Nivel Educativo</label>
                                            <div class="radio i-checks"><label> <input type="radio" value="Primaria" name="educacion_hijo1"> <i></i> Primaria </label></div>

                                            <div class="radio i-checks"><label> <input type="radio" value="Secundaria" name="educacion_hijo1"> <i></i> Secundaria </label></div>

                                            <div class="radio i-checks"><label> <input type="radio" value="Universitario" name="educacion_hijo1"> <i></i> Universitario </label></div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="hijo2" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Nombres</label>
                                            <input type="text" name="nombre_hijo2" placeholder="Nombres del hijo(a)" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Apellidos</label>
                                            <input type="text" name="apellido_hijo2" placeholder="Apellidos del hijo(a)" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Cédula</label>
                                            <div class="input-group m-b">
                                                <span class="input-group-addon">V-</span>
                                                <input type="text" name="cedula_hijo2" placeholder="Cédula" class="form-control cedula ced">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group calendario">
                                            <label>Fecha de nacimiento</label>
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="fecha_hijo2" class="form-control " value="10/11/2013">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label>Dirección de residencia *</label>
                                            <input type="text" name="residencia_hijo2" placeholder="La Asunción, Edo. Nueva Esparta" class="form-control">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Grupo Sanguíneo *</label>
                                            <br>
                                            <div class="col-lg-5">
                                                <div class="radio i-checks"><label> <input type="radio" value="O+" name="sangre_hijo2" checked> <i></i> O+ </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="A+" name="sangre_hijo2"> <i></i> A+ </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="B+" name="sangre_hijo2"> <i></i> B+ </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="AB+" name="sangre_hijo2"> <i></i> AB+ </label></div>
                                            </div>

                                            <div class="col-lg-5">
                                                <div class="radio i-checks"><label> <input type="radio" value="O-" name="sangre_hijo2"> <i></i> O- </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="A-" name="sangre_hijo2"> <i></i> A- </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="B-" name="sangre_hijo2"> <i></i> B- </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="AB-" name="sangre_hijo2"> <i></i> AB- </label></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="educacion_hijo2">Nivel Educativo</label>
                                            <div class="radio i-checks"><label> <input type="radio" value="Primaria" name="educacion_hijo2"> <i></i> Primaria </label></div>

                                            <div class="radio i-checks"><label> <input type="radio" value="Secundaria" name="educacion_hijo2"> <i></i> Secundaria </label></div>

                                            <div class="radio i-checks"><label> <input type="radio" value="Universitario" name="educacion_hijo2"> <i></i> Universitario </label></div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="hijo3" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Nombres</label>
                                            <input type="text" name="nombre_hijo3" placeholder="Nombres del hijo(a)" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Apellidos</label>
                                            <input type="text" name="apellido_hijo3" placeholder="Apellidos del hijo(a)" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Cédula</label>
                                            <div class="input-group m-b">
                                                <span class="input-group-addon">V-</span>
                                                <input type="text" name="cedula_hijo3" placeholder="Cédula" class="form-control cedula ced">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group calendario">
                                            <label>Fecha de nacimiento</label>
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="fecha_hijo3" class="form-control" value="10/11/2013">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label>Dirección de residencia *</label>
                                            <input type="text" name="residencia_hijo3" placeholder="La Asunción, Edo. Nueva Esparta" class="form-control ">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Grupo Sanguíneo *</label>
                                            <br>
                                            <div class="col-lg-5">
                                                <div class="radio i-checks"><label> <input type="radio" value="O+" name="sangre_hijo3" checked> <i></i> O+ </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="A+" name="sangre_hijo3"> <i></i> A+ </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="B+" name="sangre_hijo3"> <i></i> B+ </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="AB+" name="sangre_hijo3"> <i></i> AB+ </label></div>
                                            </div>

                                            <div class="col-lg-5">
                                                <div class="radio i-checks"><label> <input type="radio" value="O-" name="sangre_hijo3"> <i></i> O- </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="A-" name="sangre_hijo3"> <i></i> A- </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="B-" name="sangre_hijo3"> <i></i> B- </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="AB-" name="sangre_hijo3"> <i></i> AB- </label></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="educacion_hijo3">Nivel Educativo</label>
                                            <div class="radio i-checks"><label> <input type="radio" value="Primaria" name="educacion_hijo3"> <i></i> Primaria </label></div>

                                            <div class="radio i-checks"><label> <input type="radio" value="Secundaria" name="educacion_hijo3"> <i></i> Secundaria </label></div>

                                            <div class="radio i-checks"><label> <input type="radio" value="Universitario" name="educacion_hijo3"> <i></i> Universitario </label></div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="hijo4" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Nombres</label>
                                            <input type="text" name="nombre_hijo4" placeholder="Nombres del hijo(a)" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Apellidos</label>
                                            <input type="text" name="apellido_hijo4" placeholder="Apellidos del hijo(a)" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Cédula</label>
                                            <div class="input-group m-b">
                                                <span class="input-group-addon">V-</span>
                                                <input type="text" name="cedula_hijo4" placeholder="Cédula" class="form-control cedula ced">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group calendario">
                                            <label>Fecha de nacimiento</label>
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="fecha_hijo4" class="form-control" value="10/11/2013">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label>Dirección de residencia *</label>
                                            <input type="text" name="residencia_hijo4" placeholder="La Asunción, Edo. Nueva Esparta" class="form-control ">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Grupo Sanguíneo *</label>
                                            <br>
                                            <div class="col-lg-5">
                                                <div class="radio i-checks"><label> <input type="radio" value="O+" name="sangre_hijo4" checked> <i></i> O+ </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="A+" name="sangre_hijo4"> <i></i> A+ </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="B+" name="sangre_hijo4"> <i></i> B+ </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="AB+" name="sangre_hijo4"> <i></i> AB+ </label></div>
                                            </div>

                                            <div class="col-lg-5">
                                                <div class="radio i-checks"><label> <input type="radio" value="O-" name="sangre_hijo4"> <i></i> O- </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="A-" name="sangre_hijo4"> <i></i> A- </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="B-" name="sangre_hijo4"> <i></i> B- </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="AB-" name="sangre_hijo4"> <i></i> AB- </label></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="educacion_hijo4">Nivel Educativo</label>
                                            <div class="radio i-checks"><label> <input type="radio" value="Primaria" name="educacion_hijo4"> <i></i> Primaria </label></div>

                                            <div class="radio i-checks"><label> <input type="radio" value="Secundaria" name="educacion_hijo4"> <i></i> Secundaria </label></div>

                                            <div class="radio i-checks"><label> <input type="radio" value="Universitario" name="educacion_hijo4"> <i></i> Universitario </label></div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div id="hijo5" style="display: none;">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Nombres</label>
                                            <input type="text" name="nombre_hijo5" placeholder="Nombres del hijo(a)" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Apellidos</label>
                                            <input type="text" name="apellido_hijo5" placeholder="Apellidos del hijo(a)" class="form-control">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Cédula</label>
                                            <div class="input-group m-b">
                                                <span class="input-group-addon">V-</span>
                                                <input type="text" name="cedula_hijo5" placeholder="Cédula" class="form-control cedula ced">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group calendario">
                                            <label>Fecha de nacimiento</label>
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="fecha_hijo5" class="form-control" value="10/11/2013">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label>Dirección de residencia *</label>
                                            <input type="text" name="residencia_hijo5" placeholder="La Asunción, Edo. Nueva Esparta" class="form-control ">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Grupo Sanguíneo *</label>
                                            <br>
                                            <div class="col-lg-5">
                                                <div class="radio i-checks"><label> <input type="radio" value="O+" name="sangre_hijo5" checked> <i></i> O+ </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="A+" name="sangre_hijo5"> <i></i> A+ </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="B+" name="sangre_hijo5"> <i></i> B+ </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="AB+" name="sangre_hijo5"> <i></i> AB+ </label></div>
                                            </div>

                                            <div class="col-lg-5">
                                                <div class="radio i-checks"><label> <input type="radio" value="O-" name="sangre_hijo5"> <i></i> O- </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="A-" name="sangre_hijo5"> <i></i> A- </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="B-" name="sangre_hijo5"> <i></i> B- </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="AB-" name="sangre_hijo5"> <i></i> AB- </label></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="educacion_hijo5">Nivel Educativo</label>
                                            <div class="radio i-checks"><label> <input type="radio" value="Primaria" name="educacion_hijo5"> <i></i> Primaria </label></div>

                                            <div class="radio i-checks"><label> <input type="radio" value="Secundaria" name="educacion_hijo5"> <i></i> Secundaria </label></div>

                                            <div class="radio i-checks"><label> <input type="radio" value="Universitario" name="educacion_hijo5"> <i></i> Universitario </label></div>

                                        </div>
                                    </div>
                                </div>
                            </div>


                            <div class="row">
                                <div class="col-sm-1">
                                    <input type="button" value="&#xf067;" class="fa-input btn btn-primary btn-sm" id="agregar2">
                                    <input style="display: none;" type="button" value="&#xf067;" class="fa-input btn btn-primary btn-sm"  id="agregar3">
                                    <input style="display: none;" type="button" value="&#xf067;" class="fa-input btn btn-primary btn-sm"  id="agregar4">
                                    <input style="display: none;" type="button" value="&#xf067;" class="fa-input btn btn-primary btn-sm"  id="agregar5">
                                </div>

                                <div class="col-sm-1">
                                    <input style="display: none;" type="button" value="&#xf068;" class="fa-input btn btn-danger btn-sm"  id="borrar2">
                                    <input style="display: none;" type="button" value="&#xf068;" class="fa-input btn btn-danger btn-sm"  id="borrar3">
                                    <input style="display: none;" type="button" value="&#xf068;" class="fa-input btn btn-danger btn-sm"  id="borrar4">
                                    <input style="display: none;" type="button" value="&#xf068;" class="fa-input btn btn-danger btn-sm"  id="borrar5">
                                </div>
                            </div>

                            <br>

                            <h2>Datos del padre</h2>
                            <div class="padre">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Cédula</label>
                                            <div class="input-group m-b">
                                                <span class="input-group-addon">V-</span>
                                                <input type="text" name="cedula_padre" placeholder="Cédula" class="form-control cedula ced">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label>Dirección de residencia *</label>
                                            <input type="text" name="residencia_padre" placeholder="La Asunción, Edo. Nueva Esparta" class="form-control ">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group" id="mayorEdad">
                                            <label>Fecha de nacimiento</label>
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="fecha_padre" class="form-control" value="10/11/2013">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label>Lugar de nacimiento</label>
                                            <input type="text" name="residencia_padre" placeholder="La Asunción, Edo. Nueva Esparta" class="form-control ">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Grupo Sanguíneo *</label>
                                            <br>
                                            <div class="col-lg-5">
                                                <div class="radio i-checks"><label> <input type="radio" value="O+" name="sangre_padre" checked> <i></i> O+ </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="A+" name="sangre_padre"> <i></i> A+ </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="B+" name="sangre_padre"> <i></i> B+ </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="AB+" name="sangre_padre"> <i></i> AB+ </label></div>
                                            </div>

                                            <div class="col-lg-5">
                                                <div class="radio i-checks"><label> <input type="radio" value="O-" name="sangre_padre"> <i></i> O- </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="A-" name="sangre_padre"> <i></i> A- </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="B-" name="sangre_padre"> <i></i> B- </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="AB-" name="sangre_padre"> <i></i> AB- </label></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="educacion_padre">Nivel Educativo</label>
                                            <div class="radio i-checks"><label> <input type="radio" value="Primaria" name="educacion_padre" checked> <i></i> Primaria </label></div>

                                            <div class="radio i-checks"><label> <input type="radio" value="Secundaria" name="educacion_padre"> <i></i> Secundaria </label></div>

                                            <div class="radio i-checks"><label> <input type="radio" value="Universitaria" name="educacion_padre"> <i></i> Universitario </label></div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                            <br>

                            <h2>Datos de la madre</h2>
                            <div class="madre">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Cédula</label>
                                            <div class="input-group m-b">
                                                <span class="input-group-addon">V-</span>
                                                <input type="text" name="cedula_madre" placeholder="Cédula" class="form-control cedula ced">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label>Dirección de residencia *</label>
                                            <input type="text" name="residencia_madre" placeholder="La Asunción, Edo. Nueva Esparta" class="form-control ">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group" id="mayorEdad">
                                            <label>Fecha de nacimiento</label>
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span><input type="text" name="fecha_madre" class="form-control" value="10/11/2013">
                                            </div>
                                        </div>

                                    </div>

                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label>Lugar de nacimiento</label>
                                            <input type="text" name="residencia_madre" placeholder="La Asunción, Edo. Nueva Esparta" class="form-control ">
                                        </div>
                                    </div>
                                </div>

                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Grupo Sanguíneo *</label>
                                            <br>
                                            <div class="col-lg-5">
                                                <div class="radio i-checks"><label> <input type="radio" value="O+" name="sangre_madre" checked> <i></i> O+ </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="A+" name="sangre_madre"> <i></i> A+ </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="B+" name="sangre_madre"> <i></i> B+ </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="AB+" name="sangre_madre"> <i></i> AB+ </label></div>
                                            </div>

                                            <div class="col-lg-5">
                                                <div class="radio i-checks"><label> <input type="radio" value="O-" name="sangre_madre"> <i></i> O- </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="A-" name="sangre_madre"> <i></i> A- </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="B-" name="sangre_madre"> <i></i> B- </label></div>

                                                <div class="radio i-checks"><label> <input type="radio" value="AB-" name="sangre_madre"> <i></i> AB- </label></div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label for="educacion_conyugue">Nivel Educativo</label>
                                            <div class="radio i-checks"><label> <input type="radio" value="Primaria" name="educacion_madre" checked> <i></i> Primaria </label></div>

                                            <div class="radio i-checks"><label> <input type="radio" value="Secundaria" name="educacion_madre"> <i></i> Secundaria </label></div>

                                            <div class="radio i-checks"><label> <input type="radio" value="Universitaria" name="educacion_madre"> <i></i> Universitario </label></div>

                                        </div>
                                    </div>
                                </div>
                            </div>

                        </fieldset>

                        <h1>Servicio Militar</h1>
                        <fieldset>
                            <h2>Datos relativos al servicio militar</h2>
                            <br>
                            <label>El funcionario cumplió con servicio militar?</label>

                            <div class="form-group">
                                <div class="radio i-checks"><label> <input id="si" type="radio" value="si" name="servicio" checked> <i></i> Si </label></div>

                                <div class="radio i-checks"><label> <input id="no" type="radio" value="no" name="servicio"> <i></i> No </label></div>
                            </div>

                            <div id="militar">
                                <div class="row">
                                    <div class="col-lg-4">
                                        <div class="form-group calendario">
                                            <label>Fecha de inscripcion</label>
                                            <div class="input-group date">
                                                <span class="input-group-addon"><i class="fa fa-calendar"></i></span>
                                                <input type="text" name="f_inscripcion" class="form-control" placeholder="20/01/2017">
                                            </div>
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Registro Militar</label>
                                            <input type="text" name="r_militar" class="form-control" placeholder="Nº de Inscripción">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="componente">Componente donde prestó servicio</label>
                                        <select class="form-control m-b" name="componente">
                                            <option value="ejercito">Ejército Nacional</option>
                                            <option value="armada">Armada Nacional</option>
                                            <option value="aviacion">Aviación Militar</option>
                                            <option value="guardia">Guardia Nacional</option>
                                            <option value="milicia">Milicia Bolivariana</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <label>Período de servicio</label>
                                        <div class="input-group input-daterange">
                                            <div class="input-group-addon">De</div>
                                            <input type="text" class="form-control" name="fInicio" placeholder="05/04/2012">
                                            <div class="input-group-addon">a</div>
                                            <input type="text" class="form-control" name="fFin" placeholder="19/04/2012">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <label for="rango">Rango Alcanzado</label>
                                        <select class="form-control m-b" name="rango">
                                            <option value="miliciano">Miliciano</option>
                                            <option value="distinguido">Distinguido</option>
                                            <option value="caboS">Cabo Segundo</option>
                                            <option value="caboP">Cabo Primero</option>

                                            <option value="sargentoS">Sargento Segundo</option>
                                            <option value="argentoP">Sargento Primero</option>
                                            <option value="sargentoMT">Sargento Mayor de Tercera</option>
                                            <option value="sargentoMS">Sargento Mayor de Segunda</option>
                                            <option value="sargentoMP">Sargento Mayor de Primera</option>
                                            <option value="sargentoA">Sargento Ayudante</option>
                                            <option value="sargentoSup">Sargento Supervisor</option>

                                            <option value="teniente">Teniente</option>
                                            <option value="primerT">Primer Teniente</option>
                                            <option value="capitan">Capitán</option>

                                            <option value="mayor">Mayor</option>
                                            <option value="tenienteC">Teniente Coronel</option>
                                            <option value="coronel">Coronel</option>

                                            <option value="generalBrig">General de Brigada</option>
                                            <option value="generalDiv">General de División</option>
                                            <option value="mayorGen">Mayor General</option>
                                            <option value="genJefe">General en Jefe</option>
                                        </select>
                                    </div>
                                </div>
                                <br>
                                <div class="row">
                                    <div class="col-lg-8">
                                        <div class="form-group">
                                            <label>Causa de finalización</label>
                                            <input type="text" name="razon" class="form-control" placeholder="Insubordinación">
                                        </div>
                                    </div>

                                    <div class="col-lg-4">
                                        <div class="form-group">
                                            <label>Calificación de la Conducta</label>
                                            <input type="text" name="conducta" class="form-control" placeholder="Calificación">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </fieldset>

                        <h1>Documentos de Ingreso</h1>
                        <fieldset>

                        </fieldset>

                        <h1>Carrera Policial</h1>
                        <fieldset>

                        </fieldset>

                        <h1>Remuneraciones y Beneficios</h1>
                        <fieldset>

                        </fieldset>

                        <h1>Situación Administrativa</h1>
                        <fieldset>

                        </fieldset>

                        <h1>Egreso Policial</h1>
                        <fieldset>

                        </fieldset>

                        <h1>Régimen Disciplinario</h1>
                        <fieldset>

                        </fieldset>

                        <h1>Exámenes Médicos</h1>
                        <fieldset>

                        </fieldset>

                        <h1>Seguro Social</h1>
                        <fieldset>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="ivss">Planilla Nº IVSS</label>
                                    <input type="file" name="ivss" class="form-control">
                                </div>

                                <div class="col-lg-4">
                                    <label for="faov">Planilla Nº FAOV</label>
                                    <input type="file" name="faov" class="form-control">
                                </div>

                                <div class="col-lg-4">
                                    <label for="servSalud">Inscripció en Servicio de Salud</label>
                                    <input type="file" name="servSalud" class="form-control">
                                </div>
                            </div>


                            <br>

                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="jubilacion">Planilla Fondo Especial de Jubilaciones y Pensiones</label>
                                    <input type="file" name="jubilacion" class="form-control">
                                </div>

                                <div class="col-lg-4">
                                    <label for="seguro">Planilla de seguro, vida, accidentes, funerario</label>
                                    <input type="file" name="seguro" class="form-control">
                                </div>
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

        $('#mayorEdad .input-group.date').datepicker({
            startView: 2,
            format: 'dd/mm/yyyy',
            todayBtn: "linked",
            keyboardNavigation: false,
            forceParse: false,
            autoclose: true,
            endDate: '-18y'
        });

        $('.input-daterange').datepicker({
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
