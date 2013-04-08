<?php 
  
	Class Actividad {
		var $nivel;
		var	$idioma;
		
		public function Actividad($nivel, $idioma) {
			$this->nivel = $nivel;
			$this->idioma = $idioma;	
		}
	}
	
	Class Libro extends Actividad {
		var $titulo;
		var $contenido;
		var $autor;	
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
	
	$prueba = new Gramatica('bajo', 'Inglés');
	$prueba->enunciado = 'Enunciado de prueba';
	$prueba->solucion = 'Solucion de prueba';
	$prueba->explicacion = 'Explicacion de prueba';
	
	$prueba->darExplicacion();
?>
