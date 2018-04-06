<?php
//echo $_SERVER['PHP_SELF'];
//ruta del controlador
require_once("controller/controlador.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Usuario</title>
	<meta charset="utf-8">

	<link rel="stylesheet" type="text/css" href="view/bootstrap-4.0.0-dist/css/bootstrap.css">
	<link rel="stylesheet" type="text/css" href="view/fontawesome-free-5.0.6/on-server/css/fontawesome.css">
</head>
<body>
	<div style="text-align: center; width: 100%; height: 300px; padding-top: 5%;">
		<form action="view/crear_usuario.php" method="POST">
			<!--Boton para crear nuevos usuarios-->
			<input type="submit" name="btn_crear" value="Crear usuario">
		</form><br>
		<table border="1px" style="margin: 0px auto;">
			<!--Encabezados de la tabla-->
			<tr>
				<td>Documento</td>
				<td>Nombre</td>
				<td>Apellido</td>
				<td>Telefono</td>
				<td>Correo</td>
				<td>Editar</td>
			</tr>
			<?php
				// la variable $result_us esta en el controlador
				foreach ($result_us as $valor_us) {
					//Pinta los datos encontrados en la tabla
					echo"<tr>
							<td>".$valor_us['documento']."</td>
							<td>".$valor_us['nombre']."</td>
							<td>".$valor_us['apellido']."</td>
							<td>".$valor_us['telefono']."</td>
							<td>".$valor_us['correo']."</td>
							<td>
								<form action='view/crear_usuario.php' method='POST'>
									<input type='hidden' name='formulario' value='2'>
									<input type='hidden' name='id' value='".$valor_us['us_id']."'>
									<input type='hidden' name='documento' value='".$valor_us['documento']."'>
									<input type='hidden' name='nombre' value='".$valor_us['nombre']."'>
									<input type='hidden' name='apellido' value='".$valor_us['apellido']."'>
									<input type='hidden' name='telefono' value='".$valor_us['telefono']."'>
									<input type='hidden' name='correo' value='".$valor_us['correo']."'>
									<input class='btn btn-info btn-xs' type='submit' name='btn_formulario' value='Editar'>
								</form>
							</td>
						 </tr>";
				}
			?>
		</table>
	</div>
</body>
</html>