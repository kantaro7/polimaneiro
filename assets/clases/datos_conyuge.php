<?php
    include_once('conexion.php');

    class datos_conyuge{
        private $codigo;
        private $cedula;
        private $nombre;
        private $apellido;
        private $direccion;
        private $edad;
        private $sexo;
        private $fecha_nac;
        private $lugar_nac;
        private $con;

        function __construct(){
            $this->con = new conexion();
        }

        public function get($atributo){
            return $this->$atributo;
        }

        public function set($atributo, $contenido){
            $this->$atributo = $contenido;
        }

        public function lista(){
            $sql = "SELECT * FROM CONYUGE";
            $resultado = $this->con->consultaRetorno($sql);
            return $resultado;
        }

        public function crear(){
            //$repetido = "SELECT * FROM CLIENTES WHERE documento = '{$this->documento}'";
			//$resultado = $this->con->consultaRetorno($repetido);
			//$num = mysql_num_rows($resultado) or die("No se pudo conectar: " . mysql_error());
            $num = 0;
            if($num != 0){
  				return false;
  			}else{
                $sql = "INSERT INTO CONYUGE (codigo, cedula, nombre, apellido, direccion, edad, sexo, fecha_nac, lugar_nac) VALUES ('{$this->codigo}', '{$this->cedula}', '{$this->nombre}', '{$this->apellido}', '{$this->direccion}', '{$this->edad}', '{$this->sexo}', '{$this->fecha_nac}', '{$this->lugar_nac}')";

                $this->con->consultaSimple($sql);
                return true;
  			}
        }

        public function mostrar(){
            $sql = "SELECT * FROM PERSONAL WHERE cedula = '{$this->cedu;a}' LIMIT 1";
			$resultado = $this->con->consultaRetorno($sql);
			$row = mysql_fetch_assoc($resultado);

			// set
			// $this->codigo = $row['codigo'];
			// $this->documento = $row['documento'];
			// $this->nombre = $row['nombre'];
			// $this->apellido = $row['apellido'];
			// $this->monto = $row['monto'];

			return $row;
        }

        public function editar(){
            $sql = "UPDATE PERSONAL SET cedula = '{$this->cedula}', nombre = '{$this->nombre}', apellido = '{$this->apellido}', sexo = '{$this->apellido}', telefono = '{$this->telefono}', tipo = '{$this->tipo}' WHERE codigo = '{$this->codigo}'";

            $this->con->consultaSimple($sql);
        }

        public function eliminar(){
            $sql = "DELETE FROM CLIENTES WHERE codigo = '{$this->codigo}'";
            $this->con->consultaSimple($sql);
        }
    }

?>
