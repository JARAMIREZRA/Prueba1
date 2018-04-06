<?php
//echo $_SERVER['PHP_SELF'];
error_reporting(0); //Silencia los errores
if ($_SERVER['PHP_SELF'] == "/prueba_crud/index.php") {
	require_once("model/consultas.php");
} else {
	require_once("../model/consultas.php");
}

$consulta_us = new Consultas();
$result_us = $consulta_us->usuarios(); //array con los datos encontrados en la tabla

//condicion que recibe los datos que se insertaran en la tabla
if ($_POST['formulario'] == 1) {
	$documento = $_POST['documento'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];

	$insert_us = new Consultas();
	$insert_us->insertar($documento, $nombre, $apellido, $telefono, $correo);

	header("location:/prueba_crud/index.php");
}

//Condicion que recibe los datos que va a editar en la tabla
if ($_POST['editar'] != "") {
	$id = $_POST['editar'];
	$documento = $_POST['documento'];
	$nombre = $_POST['nombre'];
	$apellido = $_POST['apellido'];
	$telefono = $_POST['telefono'];
	$correo = $_POST['correo'];

	$edita_us = new Consultas();
	$edita_us->edita($id, $documento, $nombre, $apellido, $telefono, $correo);

	header("location:/prueba_crud/index.php");
}



?>