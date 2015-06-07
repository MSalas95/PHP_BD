<?php 
	
	include '../modelo/Tecnico.php';	

	class OperacionesBD
	{	
		private $servidor = 'localhost';
		private $usuario = 'root';
		private $pass = '';
		private $bd = 'login-ejemplo';
		
		public function conectar(){
			$con = mysqli_connect($this->servidor,$this->usuario,$this->pass,$this->bd) or die ('no se conecta');
			return $con;
		}

		public function insertarTecnico($tecnico){
			$sql = 	"INSERT INTO tecnico (nombre,apellido,cedula,clave) 
					 VALUES ('$tecnico->nombre','$tecnico->apellido','$tecnico->cedula','$tecnico->clave')";
			$con = $this->conectar();
			mysqli_query($con,$sql) or die 	
			('No se puede insertar '.mysqli_error($con));
			echo 'Usuario Registrado';		
		}

		public function registrarTecnico($nombre,$apellido,$cedula,$clave){
			$tecnico = new Tecnico($nombre,$apellido,$cedula,$clave);
			$this->insertarTecnico($tecnico);
		}


	}

	

 ?>