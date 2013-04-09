<?php
	include ('basura.php');
	include ('Manager.php');
	
	$libroPrueba = new Libro();
	$libroPrueba->nombre = "prueba";
	$libroPrueba->nivel = 1;
	$libroPrueba->idioma = "Ingles";
	$libroPrueba->autor = "Perico";
	$libroPrueba->contenido = "Bla bla bla bla bla bla bla  bla bla  bla bla  bla bla  bla bla  bla bla  bla bla ";
	$libroPrueba->titulo = "Librito";
	
	DDBB_Manager::guardar($libroPrueba, 'prueba');
	
	$libroPrueba->autor='Pablo';
	
	DDBB_Manager::modificar($libroPrueba, 'prueba');
	
	DDBB_Manager::mostrar($libroPrueba, 'prueba');
	
	DDBB_Manager::eliminar($libroPrueba, 'prueba');
?>