<?php
 $alert= '';
   session_start();
   if (!empty($_SESSION['active'])) {
      header('location: sistema/Parking moteros.php');
   }else {




  if (!empty($_POST)) {
    if (empty($_POST['usuario'])|| empty($_POST['clave'])) {
      $alert='Ingrese su usuario y su clave';
      }else {
        require_once"conexion.php";


        $user= mysqli_escape_string($conection,$_POST['usuario']);
        $pass= md5(mysqli_escape_string($conection,$_POST['clave']));

        //$query= mysqli_query($conection,"SELECT * FROM usuario WHERE usuario ='$user' AND clave ='$pass'");
        $query= mysqli_query($conection,"SELECT * FROM usuario WHERE usuario ='$user'");
        $result= mysqli_num_rows($query);

        if ($result > 0)
        {
          $data= mysqli_fetch_array($query);

          $_SESSION['active']= true;
          $_SESSION['idUser']= $data['idusuario'];
          $_SESSION['nombre']= $data['nombre'];
          $_SESSION['email']= $data['email'];
          $_SESSION['user']= $data['usuario'];
          $_SESSION['rol']= $data['rol'];

          header('location: sistema/Parking moteros.php');
          }
          else {
            $alert= 'El usuario o la clave son incorrectos';
              session_destroy();
          }




         }


    }
  }
 ?>
<!DOCTYPE html>
<html lang="es">
  <head>
    <meta charset="utf-8">
    <title>INICIAR SESION</title>
    <link rel="stylesheet" href="css/index.css">


    </script>
  </head>
  <body>
    <header>

    </header>
    <div class="login">
      <form class="form-signin" method="post" action="index.php" >


      <img src="imagenes/logo.png" alt="logo" class="logo">
      <h1>INICIAR SESION</h1>
      <br>
      <label for="USUARIO">Nobre de usuario:</label>
      <input type="text" name="usuario" placeholder="NOMBRE DE USUARIO" id="USUARIO" required >
    <br>
      <label for="PASS">Contaseña</label>
      <input type="password" name="clave" id="PASS" placeholder="&#128273;CONTRASEÑA" required>
      <br>
      <div class="alert">
        <?php echo isset($alert)? $alert : ''; ?>
      </div>
      <br>
       <input type="submit" name="entrar"  id="entrar" value="ENTRAR" >
       </form>

      

    </div>
  </body>
</html>
