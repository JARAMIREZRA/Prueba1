<?php
//echo $_SERVER['PHP_SELF'];

if ($_SERVER['PHP_SELF'] == "/prueba_crud/index.php") {
	require_once("model/conexion.php");
} else {
	require_once("../model/conexion.php");
}

class Consultas {

	private $con;
	private $conexion;
	private $resultado;

	//metodo constructor
	function __construct() {
		$this->con = new Conexion();
		$this->conexion = $this->con->conectar();
		$this->resultado = array();
	}

	//Busca los usuarios en la base de datos
	function usuarios() {
		$query = "SELECT * FROM usuario WHERE activo = 1";

		$result = mysqli_query($this->conexion, $query) or die("Error SELECT");

		while ($row = mysqli_fetch_array($result)) {
			$this->resultado[] = $row;
		}
		return $this->resultado;
	}

	//Inserta los datos en la BD
	function insertar($documento, $nombre, $apellido, $telefono, $correo) {

		$documento = mysqli_real_escape_string($this->conexion, $documento);
		$nombre = mysqli_real_escape_string($this->conexion, $nombre);
		$apellido = mysqli_real_escape_string($this->conexion, $apellido);
		$telefono = mysqli_real_escape_string($this->conexion, $telefono);
		$correo = mysqli_real_escape_string($this->conexion, $correo);

		$query = "INSERT INTO usuario (documento, nombre, apellido, telefono, correo) VALUES ('".$documento."','".$nombre."','".$apellido."','".$telefono."','".$correo."')";

		mysqli_query($this->conexion, $query) or die("Error INSERT");
	}

	//Edita los datos en la BD
	function edita($id, $documento, $nombre, $apellido, $telefono, $correo) {

		$id = mysqli_real_escape_string($this->conexion, $id);
		$documento = mysqli_real_escape_string($this->conexion, $documento);
		$nombre = mysqli_real_escape_string($this->conexion, $nombre);
		$apellido = mysqli_real_escape_string($this->conexion, $apellido);
		$telefono = mysqli_real_escape_string($this->conexion, $telefono);
		$correo = mysqli_real_escape_string($this->conexion, $correo);

		echo $query = "UPDATE usuario SET documento = '".$documento."', nombre = '".$nombre."', apellido = '".$apellido."', telefono = '".$telefono."', correo = '".$correo."' WHERE us_id = '".$id."'";

		mysqli_query($this->conexion, $query) or die("Error UPDATE");
	}
}
?>