<?php
 session_start();

	include "../conexion.php";



	if(!empty($_POST))
	{
		$alert='';
		if(empty($_POST['nombre']) || empty($_POST['Cc']) || empty($_POST['marca']) || empty($_POST['placa']) || empty($_POST['tel']) || empty($_POST['fecha']))
		{
			$alert='<p>Todos los campos son obligatorios.</p>';
		}else{

			$nombre = $_POST['nombre'];
			$Cc     = $_POST['Cc'];
			$marca  = $_POST['marca'];
			$placa  = $_POST['placa'];
			$tel    = $_POST['tel'];
      $fecha  = $_POST['fecha'];





				$query_insert = mysqli_query($conection,"INSERT INTO cliente(nombre,Cc,marca,placa,tel,fecha)
																	VALUES('$nombre','$Cc','$marca','$placa','$tel','$fecha')");


			}


	}



 ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Nueva mensualidad</title>
    <link rel="stylesheet" href="../css/fomnew.css">
  </head>
  <body>


  <form  action="" method="post">
    <div class="formularionuevo">
      <h1>Nueva Mensualidad</h1>

      <br>
      <div class="alert">
        <?php echo isset($alert) ? $alert : ''; ?>
      </div>
      <label for="Name">Nombre del Conductor: </label>
      <input type="text" name="nombre" id="Nnombre"  class="new" placeholder="  Nombre del motero">
      <br>
      <label for="Cc">Cc: </label>
      <input type="number" name="Cc" id="Cc"  class="new" placeholder="  Numero de C.c">
      <br>
      <label for="Marca">Marca: </label>
      <input type="text" name="marca" id="Marca" class="new"  placeholder="  Ej: Akt">
      <br>
      <label for="Placa">Placa: </label>
      <input type="text" name="placa" id="Placa" class="new"   placeholder="  abc-123">
      <br>
      <label for= "tel">Celular: </label>
      <input type="number" name="tel" class="new" id="  tel"  >
      <br>
      <label for="fecha">Fecha</label>
      <input type="date" name="fecha" class="new" id="fecha" value="fecha">

      <input type="submit" name="Guardar" value="Guardar">


    </div>
  </form>

  </body>
</html>
