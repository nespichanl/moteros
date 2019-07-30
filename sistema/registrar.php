<?php


	include "../conexion.php";


	if(!empty($_POST))
	{
		$alert='';
		if(empty($_POST['nombre']) || empty($_POST['correo']) || empty($_POST['usuario']) || empty($_POST['clave']) || empty($_POST['rol']))
		{
			$alert='<p>Todos los campos son obligatorios.</p>';
		}else{

			$nombre = $_POST['nombre'];
			$email  = $_POST['correo'];
			$user   = $_POST['usuario'];
			$clave  = md5($_POST['clave']);
			$rol    = $_POST['rol'];



				$query_insert = mysqli_query($conection,"INSERT INTO usuario(nombre,correo,usuario,clave,rol)
																	VALUES('$nombre','$email','$user','$clave','$rol')");





		}

	}



 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Registrarce</title>

 <?php include "scripts.php" ?>
    <link rel="stylesheet" href="../css/register.css">
  </head>
  <body>

<?php include "header.php" ?>
<div class="register">
  <form action = ""  method = "post" >
    <h1>Registrarce</h1>
    <br>

<div ><?php echo isset($alert) ? $alert : ''; ?></div>

    <label for="Nombre">Nombre</label>
    <input type="text" name="nombre" id="nombre" class="regis" >
    <br>
		<label for="email">Correo: </label>
		    <input type="correo" name="correo" id="correo" class="regis" >
    <br>
		<label for="usuario">Nombre de Usuario: </label>
		<input type="text" name="usuario" id="usuario" class="regis">
    <br>
<label for="pass">Contraseña: </label>
    <input type="password" name="clave" id="clave"class="regis" >
    <br><label for="rol">Tipo de Usuario</label>
    <select class="rol" name="rol" id="rol" class="regis" >
      <option value="2">Empleado</option>
    </select>
    <br>
    <input type="submit" id="Registrarce" value=" Registrarce "name="Registrarce" >
</form>

 </div>
</html>
