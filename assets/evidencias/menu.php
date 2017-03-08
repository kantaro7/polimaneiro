<?php
	include_once("../modulos/enrutador.php");
?>


<!DOCTYPE html>
<html>

<head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">

   <title>PONCHO | Sala de Evidencias</title>

   <link href="../css/bootstrap.min.css" rel="stylesheet">
   <link href="../font-awesome/css/font-awesome.css" rel="stylesheet">

   <!-- Toastr style -->
   <link href="../css/plugins/toastr/toastr.min.css" rel="stylesheet">

   <!-- Gritter -->
   <link href="../js/plugins/gritter/jquery.gritter.css" rel="stylesheet">

   <link href="../css/animate.css" rel="stylesheet">
   <link href="../css/style.css" rel="stylesheet">

   <link href="../css/plugins/datapicker/datepicker3.css" rel="stylesheet">

   <!-- Steps -->
   <link href="../css/plugins/steps/jquery.steps.css" rel="stylesheet">

   <!-- iCheck -->
   <link href="../css/plugins/iCheck/custom.css" rel="stylesheet">

	<!-- fileinput -->
   <link href="../css/plugins/fileinput/fileinput.css" rel="stylesheet">

   <link href="../css/prueba.css" rel="stylesheet">
</head>

<body class="fixed-sidebar">
	<?php include_once("../modulos/recursos.php"); ?>

	<div id="wrapper">
    	<nav class="navbar-default navbar-static-side" role="navigation">
        	<div class="sidebar-collapse">
            	<ul class="nav" id="side-menu">
            		<li class="nav-header">
                		<div class="dropdown profile-element">
							<span>
                     			<img alt="image" class="img-circle" src="../img/profile_small.jpg" />
                    		</span>
                    		<a data-toggle="dropdown" class="dropdown-toggle" href="#">
                     			<span class="clear">
									<span class="block m-t-xs"> <strong class="font-bold">Pablo López</strong></span>
									<span class="text-muted text-xs block">Director RRHH<b class="caret"></b></span>
								</span>
							</a>
                    		<ul class="dropdown-menu animated fadeInRight m-t-xs">
                        		<li><a href="../profile.html">Perfil</a></li>
                        		<li><a href="../contacts.html">Contactos</a></li>
                        		<li><a href="../mailbox.html">Correo</a></li>
                        		<li class="divider"></li>
                        		<li><a href="../../index.html">Cerrar sesión</a></li>
                    		</ul>
                		</div>

                		<div align="center">
                    		<img src="../img/logoPolicia.png" class="logo-mini"/>
                		</div>
            		</li>

					<li <?php if (isset($_GET['cargar']) && $_GET['cargar'] == "principal") { echo "class=\"active\"";} elseif (!isset($_GET['cargar'])) { echo "class=\"active\""; } ?>>
	            		<a href="?cargar=principal"><i class="fa fa-th-large"></i> <span class="nav-label">Inicio</span></a>
	            	</li>

					<li <?php if (isset($_GET['cargar']) && $_GET['cargar'] == "nuevaEvidencia") { echo "class=\"active\"";} ?>>
						<a href="?cargar=nuevaEvidencia"><i class="fa fa-archive"></i> <span class="nav-label">Registrar evidencia</span></a>
					</li>

					<li <?php if (isset($_GET['cargar']) && $_GET['cargar'] == "prueba") { echo "class=\"active\"";} ?>>
						<a href="#"><i class="fa fa-clipboard"></i> <span class="nav-label">Prueba</span> <span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li><a href="?cargar=prueba"><i class="fa fa-user-plus"></i> Prueba</a></li>
						</ul>
					</li>

					<li>
						<a href="#"><i class="fa fa-cogs"></i> <span class="nav-label">Sistema</span> <span class="fa arrow"></span></a>
						<ul class="nav nav-second-level">
							<li><a href="#"><i class="fa fa-database" aria-hidden="true"></i> Respaldo</a></li>
							<li><a href="#"><i class="fa fa-download" aria-hidden="true"></i> Restauraci&oacuten</a></li>
						</ul>
					</li>

					<li>
						<a href="#"><i class="fa fa-info-circle"></i> <span class="nav-label">Acerca de</span></a>
					</li>
            	</ul>
        	</div>
    	</nav>

    	<div id="page-wrapper" class="gray-bg dashbard-1">
	    	<div class="row border-bottom">
		    	<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
			    	<div class="navbar-header">
			      		<a class="navbar-minimalize minimalize-styl-2 btn btn-primary " href="#"><i class="fa fa-bars"></i> </a>
			    	</div>

		        	<ul class="nav navbar-top-links navbar-right">
		            	<li>
		            		<span class="m-r-sm text-muted welcome-message">Bienvenido a PONCHO. RRHH.</span>
		            	</li>
			            <li class="dropdown">
			            	<a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
			            		<i class="fa fa-envelope"></i> <span class="label label-warning">16</span>
			            	</a>
		                	<ul class="dropdown-menu dropdown-messages">
		                    	<li>
		                    		<div class="dropdown-messages-box">
		                        		<a href="../profile.html" class="pull-left">
		                           			<img alt="image" class="img-circle" src="../img/a7.jpg">
		                        		</a>
		                        		<div class="media-body">
		                            		<small class="pull-right">46h ago</small>
		                            		<strong>Mike Loreipsum</strong> started following <strong>Monica Smith</strong>. <br>
		                            		<small class="text-muted">3 days ago at 7:58 pm - 10.06.2014</small>
		                        		</div>
		                        	</div>
		                    	</li>

		                    	<li class="divider"></li>

			                  	<li>
			                        <div class="dropdown-messages-box">
			                        	<a href="../profile.html" class="pull-left">
			                            	<img alt="image" class="img-circle" src="../img/a4.jpg">
			                        	</a>
			                        	<div class="media-body ">
			                           		<small class="pull-right text-navy">5h ago</small>
			                            	<strong>Chris Johnatan Overtunk</strong> started following <strong>Monica Smith</strong>. <br>
			                            	<small class="text-muted">Yesterday 1:21 pm - 11.06.2014</small>
			                        	</div>
			                        </div>
			                    </li>

		                    	<li class="divider"></li>

		                    	<li>
			                        <div class="dropdown-messages-box">
			                        	<a href="../profile.html" class="pull-left">
			                            	<img alt="image" class="img-circle" src="../img/profile.jpg">
			                        	</a>
			                           	<div class="media-body ">
			                              	<small class="pull-right">23h ago</small>
			                                <strong>Monica Smith</strong> love <strong>Kim Smith</strong>. <br>
			                                <small class="text-muted">2 days ago at 2:30 am - 11.06.2014</small>
			                            </div>
			                        </div>
		                    	</li>

		                    	<li class="divider"></li>

								<li>
			                        <div class="text-center link-block">
			                        	<a href="../mailbox.html">
			                            	<i class="fa fa-envelope"></i> <strong>Read All Messages</strong>
			                        	</a>
			                        </div>
		                		</li>
		                	</ul>
			            </li>

			            <li class="dropdown">
			            	<a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
			                	<i class="fa fa-bell"></i>  <span class="label label-primary">8</span>
			            	</a>

			            	<ul class="dropdown-menu dropdown-alerts">
			                	<li>
			                    	<a href="../mailbox.html">
			                        	<div>
			                        		<i class="fa fa-envelope fa-fw"></i> You have 16 messages
			                        		<span class="pull-right text-muted small">4 minutes ago</span>
			                    		</div>
			                    	</a>
			                	</li>

								<li class="divider"></li>

								<li>
			                    	<a href="../profile.html">
			                  			<div>
			                        		<i class="fa fa-twitter fa-fw"></i> 3 New Followers
			                        		<span class="pull-right text-muted small">12 minutes ago</span>
			                        	</div>
			                    	</a>
			                	</li>

			                	<li class="divider"></li>

			                	<li>
			                  		<a href="../grid_options.html">
			                        	<div>
			                        		<i class="fa fa-upload fa-fw"></i> Server Rebooted
			                        		<span class="pull-right text-muted small">4 minutes ago</span>
			                        	</div>
			                    	</a>
			                	</li>

			                	<li class="divider"></li>

								<li>
			                    	<div class="text-center link-block">
			                        	<a href="../notifications.html">
			                    			<strong>See All Alerts</strong>
			                        		<i class="fa fa-angle-right"></i>
			                        	</a>
			                    	</div>
			                	</li>
			            	</ul>
			            </li>

			            <li>
			            	<a href="../../index.html">
			                	<i class="fa fa-sign-out"></i> Cerrar sesión
			            	</a>
			            </li>
		        	</ul>
		    	</nav>
	    	</div>

			<section>
				<?php
					$enrutador = new enrutador();
					if($enrutador->validarGET(isset($_GET['cargar']))){
						$enrutador->cargarVista($_GET['cargar']);
					}
				?>
			</section>
    	</div>
   </div>
</body>
</html>
