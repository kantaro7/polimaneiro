<?php

 	class conexion{

 		//Atributos
 		private $host;
 		private $user;
 		private $pass;
 		private $bd;
		private $app;

 		//Metodos
 		public function __construct(){
 			$this->host = "localhost";
 			$this->user = "root";
 			$this->pass = "";
 			$this->bd = "PONCHO";

 			$con = mysql_connect($this->host, $this->user, $this->pass);

			if($con){
 				mysql_select_db($this->bd, $con);
 			}else{
				die("No se pudo conectar: " . mysql_error());
			}
 		}

 		public function consultaSimple($sql){
			mysql_query($sql);
 		}

 		public function consultaRetorno($sql){
 			$consulta = mysql_query($sql);
 			return $consulta;
 		}

 	}

?>
