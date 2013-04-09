<?php 
  
	Class Actividad {
		var $nivel;
		var	$idioma;
		var $nombre;
		
		public function getNivel()
		{
			return $this->nivel;
		}
		public function getIdioma()
		{
			return $this->idioma;
		}
		public function getNombre()
		{
			return $this->nombre;
		}
		
		public function setNivel($nivel)
		{
			$this->nivel=$nivel;
		}
		public function setIdioma($idioma)
		{
			$this->idioma=$idioma;
		}
		public function setNombre($nombre)
		{
			$this->nombre=$nombre;
		}
		/*public function Actividad($nivel, $idioma) {
			$this->nivel = $nivel;
			$this->idioma = $idioma;	
		}*/
	}
	
	Class Libro extends Actividad {
		var $nivel;
		var	$idioma;
		var $nombre;
		var $titulo;
		var $contenido;
		var $autor;	
		
		public function getValues() {
			/*return getNombre().",".getNivel().",".getIdioma().",".$titulo.",".$contenido.",".$autor;	*/
			/*return "$nivel, $idioma ,$nombre ,$titulo ,$contenido, $autor";	*/
			$values = "'','".$this->nombre."',";
			$values.= $this->nivel.",'";
			$values.= $this->idioma."','";
			$values.= $this->titulo."','";
			$values.= $this->contenido."','";
			$values.= $this->autor."'";
			return $values;
		}
		
		public function getModValues() {
			/*return "nombre = '".getNombre()."',nivel = ".getNivel().", idioma = '".getIdioma()."', titulo = '$titulo', contenido = '$contenido', autor = '$autor'";	*/
			/*return "nivel= $nivel, idioma=$idioma ,nombre=$nombre ,titulo=$titulo ,contenido=$contenido, autor=$autor";	*/
			$values = "nombre='".$this->nombre."',nivel=";
			$values.= $this->nivel.",idioma='";
			$values.= $this->idioma."',titulo='";
			$values.= $this->titulo."',contenido='";
			$values.= $this->contenido."',autor='";
			$values.= $this->autor."'";
			return $values;
		}
	}
	
	Class Ejercicio extends Actividad {	
	}
	
	Class Gramatica extends Ejercicio {
		var $enunciado;
		var $solucion;
		var $explicacion;
		
		public function darExplicacion() {
			echo "Enunciado: ".$this->enunciado." <br>Solución: ".$this->solucion." <br>Explicación: ".$this->explicacion;	
		}
	}
	
	Class Vocabulario extends Ejercicio {
		var $palabra;
		var $traduccion;	
	}
	
	Class Juego extends Ejercicio {
		var $nombre;
	}
		
	Class Examen extends Actividad {
		var $ejercicios = array();
	}
	
	/*$prueba = new Gramatica('bajo', 'Inglés');
	$prueba->enunciado = 'Enunciado de prueba';
	$prueba->solucion = 'Solucion de prueba';
	$prueba->explicacion = 'Explicacion de prueba';
	
	$prueba->darExplicacion();*/
?>
