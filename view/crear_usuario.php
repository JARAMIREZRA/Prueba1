<?php
//echo $_SERVER['PHP_SELF'];
error_reporting(0); //Silencia los errores

$id = $_POST['id'];
$documento = $_POST['documento'];
$nombre = $_POST['nombre'];
$apellido = $_POST['apellido'];
$telefono = $_POST['telefono'];
$correo = $_POST['correo'];

if ($id == "") {
	$input = "<input type='hidden' name='formulario' value='1'>";
} else {
	$input = "<input type='hidden' name='editar' value=" . $id . ">";
}

?>
<!DOCTYPE html>
<html>
	<head>
		<title>Crear Usuario</title>
		<meta charset="utf-8">

		<link rel="stylesheet" type="text/css" href="bootstrap-4.0.0-dist/css/bootstrap.css">
	</head>
	<body>
		<div style="text-align: center; width: 100%; padding-top: 5%;">
			<div style="margin: 0px auto; width: 30%; /*border: groove 1px red;*/">
				<div class="form-group">
					<form action="../controller/controlador.php" method="POST">
						<label style="float: left;">Documento</label><br>
						<input class="form-control" type="text" name="documento" value="<?php echo $documento ?>" required><br>
						<label style="float: left;">Nombre</label><br>
						<input class="form-control" type="text" name="nombre" value="<?php echo $nombre ?>" required><br>
						<label style="float: left;">Apellido</label><br>
						<input class="form-control" type="text" name="apellido" value="<?php echo $apellido ?>" required><br>
						<label style="float: left;">Telefono</label><br>
						<input class="form-control" type="text" name="telefono" value="<?php echo $telefono ?>" required><br>
						<label style="float: left;">Correo</label><br>
						<input class="form-control" type="text" name="correo" value="<?php echo $correo ?>" required><br>
						<?php echo $input ?>

						<input type="submit" name="btn_formulario" value="Guardar" style="float: left;">
					</form>
				</div>
			</div>
		</div>
	</body>
</html>