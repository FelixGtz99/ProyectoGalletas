<?php 
include 'config.php';
include 'conexion.php';
include 'Carrito.php';
include 'Cabecera.php';
?>

<div class="container" >
    <div class="row">
      <?php
      $query1=$pdo->prepare("SELECT * FROM `productos`");
      $query1->execute();
      $listaP=$query1->fetchAll(PDO::FETCH_ASSOC);
      #print_r($listaP);
      ?>
      <?php foreach($listaP as $p){?>
        <div class="col-3">
    <div class="card">
      <img class="card-img-top" 
      title="<?php echo $p['Nombre']; ?>"

      src="<?php echo $p['Imagen'];  ?> " alt="<?php echo $p['Nombre']; ?>">
      <div class="card-body">
        <span><?php echo $p['Nombre']; ?></span>
        <h5 class="card-title"><?php echo $p['Precio'];  ?></h5>
        <p class="card-text"><?php echo $p['Descripcion'];  ?></p>
       
       <form action="" method="post">
         <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($p['ID_Producto'],Code,key); ?>">
         <input type="hidden" name="nombre" id="nombre"value="<?php echo openssl_encrypt($p['Nombre'],Code,key); ?>">
         <input type="hidden" name="precio" id="precio" value="<?php echo openssl_encrypt($p['Precio'],Code,key); ?>">
         <input type="hidden" name="cantidad" id="cantidad" value="<?php  echo openssl_encrypt(1,Code,key);  ?>">
        <button class="btn btn-primary" name="btnAccion" value="Agregar" type="submit">Agregar al carrito</button>
       </form>
      </div>
    </div>
  </div>
  



        <?php } ?>
        </div>
        </div>

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap-4.3.1.js"></script>

<?php
include 'pie.php';
?>