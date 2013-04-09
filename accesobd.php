<?php
	Class Conexion{
		var $conexion;
		function conectar() {
			$host = "localhost";
			$usuario = "root";
			$baseDatos = "catalogo";
			
			$this->conexion = new mysqli($host, $usuario, 'sanandreas',$baseDatos); 
			if ($this->conexion->connect_errno) {
				echo "Fallo al contenctar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
			}
		}
		
		function desconectar() {
			$this->conexion->close();
		}
	}
?>