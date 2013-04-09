<?php
	Class Conexion{
		var $conexion;
		function conectar() {
			$host = "localhost";
			$usuario = "root";
			$baseDatos = "catalogo";
			
			$conexion = mysql_connect('localhost','root','') or die ('No se pudo conectar: '.mysql_error());
			mysql_select_db('prueba') or die ('No se pudo selecionar la base de datos');
			/*$this->conexion = new mysql_connect($host, $usuario,'',$baseDatos);
			if ($this->conexion->connect_errno) {
				echo "Fallo al contenctar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
			}*/
		}
		
		function desconectar() {
			$this->conexion->close();
		}
	}
?>