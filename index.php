<?php
	include 'Manager.php';
	include 'basura.php';
	
	function guardarLibro() {
		$nombre = $_REQUEST['nombre'];
		$nivel = $_REQUEST['nivel'];
		$idioma = $_REQUEST['idioma'];
		$titulo = $_REQUEST['titulo'];
		$contenido = $_REQUEST['contenido'];
		$autor = $_REQUEST['autor'];
		
		
		$libro = new Libro();
		$libro->nombre = $nombre;
		$libro->nivel = $nivel;
		$libro->idioma = $idioma;
		$libro->titulo = $titulo;
		$libro->contenido = $contenido;
		$libro->autor = $autor;
		
		DDBB_Manager::guardar($libro, 'prueba');
	}
	
	function mostrarLibro() {
		$nombre = $_REQUEST['nombre'];
		DDBB_Manager::mostrarUno($nombre, 'prueba');
	}
	
	function eliminarLibro() {
		$nombre = $_REQUEST['nombre'];
		DDBB_Manager::eliminarUno($nombre, 'prueba');
	}	
	
	function mostrarTodos() {
		DDBB_Manager::mostrarTodos('prueba');
	}
	
	if (isset($_REQUEST['form']) && $_REQUEST['form'] == 'libro') {
		guardarLibro();	
	} else if (isset($_REQUEST['mostrar']) && $_REQUEST['mostrar'] == 'libro') {
		mostrarLibro();
	} else if (isset($_REQUEST['eliminar']) && $_REQUEST['eliminar'] == 'libro') {
		eliminarLibro();
	} else if (isset($_REQUEST['mostrarTodos']) && $_REQUEST['mostrarTodos'] == 'libro') {
		mostrarTodos();
	} else {
		include 'vista.html';
	}
?>