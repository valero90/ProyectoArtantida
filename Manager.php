<?php
	include('accesobd.php');
	Class DDBB_Manager {	

		static function guardar($objeto, $table) {
			$cone = new Conexion();
			$cone->conectar();

			$insercion = 'INSERT INTO '. $table. ' values('. $objeto->getValues().');';
			if (!$cone->conexion->query($insercion)){
				echo "<br>Error en la insercion.<br>";	
				echo $cone->conexion->error;	
			}else 
				echo "<br>Inserción realizada";
			$cone->desconectar();
		}
		
		static function modificar($objeto, $table) {
			$cone = new Conexion();
			$cone->conectar();

			$modificacion = "UPDATE ". $table. " SET ". $objeto->getModValues()." WHERE nombre = '".$objeto->nombre."';";
			if (!$cone->conexion->query($modificacion)) {
				echo "<br>Error en la modificación.<br>";	
				echo $cone->conexion->error;
			} else 
				echo "<br>Modificacion realizada";
			$cone->desconectar();
		}
		
		static function eliminar($objeto, $table) {
			$cone = new Conexion();
			$cone->conectar();
			
			$eliminacion = "DELETE FROM $table WHERE nombre = '".$objeto->nombre."';";
			if (!$cone->conexion->query($eliminacion)) {
				echo "<br>Error en la eliminación.<br>";	
				echo $cone->conexion->error;	
			}else 
				echo "<br>Eliminacion realizada";
			
			$cone->desconectar();
		}
		
		static function mostrar($objeto, $table) {
			$cone = new Conexion();
			$cone->conectar();
			$consulta = "SELECT * FROM $table WHERE nombre = '".$objeto->nombre. "';";
			if (!$query = $cone->conexion->query($consulta)) {
				echo "<br>Error en la consulta.<br>";	
				echo $cone->conexion->error;	
			}else {
				echo '<br><br><br>';
				while ($linea = $query->fetch_row()) {
					foreach($linea as $columna) {
						echo "$columna - ";	
					}
					echo "<br><br>";
				}
			}
			$cone->desconectar();
		}
	}
?>