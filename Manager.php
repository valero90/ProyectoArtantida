<?php
	Class DDBB_Manager {
		var $nombre_DB;
		var $conexion;
		
		private function conectar() {
			$host = "localhost";
			$usuario = "catalogo";
			$pass = "rhXxEjqDVFGSzJ5F";
			$this->$nombre_DB = "catalogo";
		
			$this->conexion = new mysqli($host, $usuario, $pass, $baseDatos);
			if ($this->conexion->connect_errno) {
				echo "Fallo al contenctar a MySQL: (" . $this->conexion->connect_errno . ") " . $this->conexion->connect_error;
			}
		}
		
		private function desconectar() {
			$conexion->close();
		}

		Static function guardar($objeto, $table) {
			conectar();

			$insercion = "INSERT INTO ". $table. " values(". $objeto->getValues().");";
			if (!$this->conexion->query($insercion)) {
				echo "Error en la inserción.";	
			}

			desconectar();
		}
		
		Static function modificar($objeto, $table) {
			conectar();

			$modificacion = "UPDATE ". $table. " SET ". $objeto->getModValues()." WHERE id = '".$objeto->id."';";
			if (!$conexion->query($modificacion)) {
				echo "Error en la modificación.";	
			}
			desconectar();
		}
		
		Static function eliminar($objeto, $table) {
			conectar();
			
			$eliminacion = "DELETE FROM $table WHERE id = ".$objeto->id.";";
			if (!$conexion->query($eliminacion)) {
				echo "Error en la eliminación.";	
			}
			
			desconectar();
		}
		
		Static function mostrar($id, $table) {
			conectar();
			$consulta = "SELECT * FROM $table WHERE id = $id;";
			if (!$query = $conexion->query($eliminacion)) {
				echo "Error en la eliminación.";	
			} else {
				while ($linea = $query->fetch_row()) {
					foreach($linea as $columna) {
						echo "$columna - ";	
					}
					echo "<br>";
				}
			}
			desconectar();
		}
	}
?>