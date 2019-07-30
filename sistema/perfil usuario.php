<?php  include"../conexion.php"; ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <meta name="description"content="PAGINA PARKING MOTEROS">
    <title>PARKING MOTEROS</title>
   <?php include "scripts.php" ?>
  </head>
  <body>
    <?php include "header.php" ?>

    <?php $query = mysqli_query($conection,"SELECT c.placa,c.nombre,c.tel,c.fecha,c.marca,c.Cc FROM cliente c ");
     $result =mysqli_num_rows($query);
        if ($result >0) {

        while ($data = mysqli_fetch_array($query)) {



      ?>
      <div class="perfiladmin">
      <h3 class="tipous">Nombre Motero: <?php  echo $data['nombre'];  ?></h3>
       <br><br><br>
        <a class="tipous">Fecha: Bogota,<?php echo $data['fecha']; ?> </a>
      </div>

        <div class="fotopU">
          <img src="../imagenes/img11.jpg" >
        </div>

    <?php
        }
      }
    ?>





  </body>
</html>
