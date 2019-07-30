<div class="barraD">
  <div class="busqueda">
    <h3>CLIENTES</h3>
    <form class="" action="perfil usuario.php" method="post">
      <label for="Buscar">BUSCAR</label>
      <input type="search" name="Buscar" id="BUSCAR" placeholder="DIGITE LA PLACA">
      <input type="submit" name="" value="Buscar">
    </form>

  </div>


<?php $query = mysqli_query($conection,"SELECT c.placa,c.nombre,c.tel,c.fecha,c.marca,c.Cc FROM cliente c ");
 $result =mysqli_num_rows($query);
    if ($result >0) {

    while ($data = mysqli_fetch_array($query)) {



  ?>


  <form class="" action="perfil usuario.php" method="post">
    <input type="submit" name="new" value="<?php  echo $data['placa'];  ?>" class="PLACA">
  </form>

<?php
    }
  }
?>
<form class="" action="form.php" method="post">
  <input type="submit" name="new" value="+"class="PLACA">
</form>
</div>
