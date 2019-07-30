  <?php

  session_start();
  if (empty($_SESSION['active'])) {
     header('location: ../');
  }

   ?>

<header>
<img src="../imagenes/logo.png" alt="logo"id="logo">


<nav class="barraN">
  <form action="Parking Moteros.php" method="post">
    <input type="submit" name="INICIO" value="INICIO" id="INICIO">
  </form>
  <form  action="perfil.php" method="post">
    <input type="submit" name="PERFIL" value="PERFIL USUARIO">
  </form>
  <form  action=""  method="post">
    <input type="submit" name="MOTEROS PARTICULAR" value="MOTEROS PARTICULAR">
      </form>
</nav>
</div>

</div>
<aside class="CLIENTES MENSUALIDAD" id="CLIENTES MENSUALES">
<?php include "barra-clientes.php" ?>
<form class="" action="index.php" method="post">
  <div class="salir">
 <a href="salir.php"><img src="../imagenes/salir.png" alt="salir" id="salir" title="salir"></a>
  </div>
</form>
</header>
