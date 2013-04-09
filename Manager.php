<?php
	include('accesobd.php');
	Class DDBB_Manager {	

		static function guardar($objeto, $table) {
			$cone = new Conexion();
			$cone->conectar();

			$insercion = "INSERT INTO ". $table. " values(". $objeto->getValues().");";
			if (!$cone->conexion->query($insercion)) {
				echo "Error en la inserción.";	
			}

			$cone->desconectar();
		}
		
		static function modificar($objeto, $table) {
			$cone = new Conexion();
			$cone->conectar();

			$modificacion = "UPDATE ". $table. " SET ". $objeto->getModValues()." WHERE id = '".$objeto->id."';";
			if (!$cone->conexion->query($modificacion)) {
				echo "Error en la modificación.";	
			}
			$cone->desconectar();
		}
		
		static function eliminar($objeto, $table) {
			$cone = new Conexion();
			$cone->conectar();
			
			$eliminacion = "DELETE FROM $table WHERE id = ".$objeto->id.";";
			if (!$cone->conexion->query($eliminacion)) {
				echo "Error en la eliminación.";	
			}
			
			$cone->desconectar();
		}
		
		static function mostrar($objeto, $table) {
			$cone = new Conexion();
			$cone->conectar();
			$consulta = "SELECT * FROM $table WHERE nombre = ".$objeto->nombre. ";";
			if (!$query = $cone->conexion->query($eliminacion)) {
				echo "Error en la eliminación.";	
			} else {
				while ($linea = $query->fetch_row()) {
					foreach($linea as $columna) {
						echo "$columna - ";	
					}
					echo "<br>";
				}
			}
			$cone->desconectar();
		}
	}
?>