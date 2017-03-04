<?php

	class enrutador{

		public function cargarVista($vista){

			switch($vista):
				case "principal":
					include_once('../rrhh/' . $vista . '.php');
				break;

				case "nuevo_exp":
					include_once('../rrhh/' . $vista . '.php');
				break;

				case "registroPersonal":
					include_once('../rrhh/' . $vista . '.php');
				break;

				case "nuevo":
					include_once('../rrhh/' . $vista . '.php');
				break;

				case "registro":
					include_once('../transporte/' . $vista . '.php');
				break;

				case "prueba":
					include_once('../evidencias/' . $vista . '.php');
				break;

				default:
					include_once('../404.html');
			endswitch;
		}

		public function validarGET($variable){
			if(empty($variable)){
				include_once('../rrhh/principal.php');
			}else{
				return true;
			}
		}
	}

?>
