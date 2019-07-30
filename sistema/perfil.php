<?php  include"../conexion.php"; ?>
<!DOCTYPE html>
<html lang="es" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Perfil de Usuario </title>
    <?php include "scripts.php" ?>
  </head>
  <body>

<?php include "header.php" ?>
<div class="perfiladmin">
 <h3 class="tipous">Tipo de usuario <?php  echo $_SESSION['user'];  ?></h3>
 <br><br>
  <a class="tipous">Fecha: Bogota,<?php echo fechaC() ?> </a>
  <br><br><br>
  <address  class="tipous">Version del software: 1.0</address>
</div>
<form class="registe" action="registrar.php" method="post">
  <input type="submit" name="crear usuario" class="crearuser" value="Crear Usuario">
  </form>




<div class="fotopU">
  <img src="../imagenes/1a.png" >
</div>

  </body>
</html>
