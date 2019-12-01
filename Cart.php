<?php 
include 'config.php';
include 'Carrito.php';
include 'Cabecera.php';
?>
 <br>
 <h3>Lista de compra</h3>
 <?php 
 if(!empty($_SESSION['CARRITO'])){
 ?>
<table class="table table-light table-bordered">
<tbody>
    <tr>
        <th width="40%">Descripción </th>
        <th width="15%" class="text-center">Cantidad </th>
        <th width="20%" class="text-center">Precio </th>
        <th width="20%" class="text-center">Total </th>
        <th width="5%">-- </th>
</tr>
<?php $total=0 ?>
<?php foreach($_SESSION['CARRITO'] as $i=>$p){?>
<tr>
        <td width="40%"><?php echo $p['NOMBRE']?></td>
        <td width="15%" class="text-center"><?php echo $p['CANTIDAD']?> </td>
        <td width="20%" class="text-center"> <?php echo $p['PRECIO']?></td>
        <td width="20%" class="text-center"><?php echo number_format ($p['PRECIO']*$p['CANTIDAD'],2)?> </td>
       <form action="" method="post">
       <input type="hidden" name="id" id="id" value="<?php echo openssl_encrypt($p['ID'],Code,key); ?>">
        <td width="5%"><button class="btn btn-danger"
        name="btnAccion" value="Borrar"
        type="submit">Borrar</button> </td>
       </form>
    </tr>
    <?php $total=$total+ ($p['PRECIO']*$p['CANTIDAD'])?>
    <?php 

}
 ?>
    <tr>
        <td colspan="3" align="rigth"><h3>Total</h3></td>
        <td align="rigth"><h3><?php echo number_format ($total,2)?></h3></td>
        <td></td>
    </tr>
    <tr>
        <td colspan="5">
        <form action="pagar.php" method="post">
        <div class="alert alert-success" role="alert">
            
       
        <div class="form-group">
            <label for="my-input">Correo de contacto</label>
            <input id="emil" class="form-control" type="email" name="email" praceholder="Por favor escriba su correo" required>
        </div>
        <small id="emailHelp" class="form-text text-muted">
            ha ese correo se va a enviar la informacion
        </small>
        </div>
        <button class="btn btn-primary btn-lg btn-block" type="submit" value="pagar" name="btnAccion">pagar</button>
        </form>
</td>
    </tr>
</tbody>
</table>
<?php 
}else{
    ?>
    <div class="alert alert-success">
No hay productos</div>
 <?php 

}
 ?>
<?php
include 'pie.php';
?>