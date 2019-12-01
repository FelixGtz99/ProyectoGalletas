<?php
include 'Config.php';
include 'conexion.php';
include 'Cabecera.php';
include 'Carrito.php';

?>

<?php
if($_POST){
    $total=0;
    $SID=session_id();
    $Correo=$_POST['email'];
 foreach($_SESSION['CARRITO'] as $i=>$p){
$total=$total+($p['PRECIO']*$p['CANTIDAD']);
 }
 $query=$pdo->prepare("INSERT INTO `ventaspaypal` (`ID`, `ClaveTransacion`, `PaypalDatos`, `Fecha`, `Corre`, `Total`, `Status`) 
 VALUES (NULL, :ClaveT, '', NOW(), :Correo, :Total, 'Pendiente');");
$query->bindParam(":ClaveT",$SID);
$query->bindParam(":Correo",$Correo);
$query->bindParam(":Total",$total);
$query->execute();
$idVenta=$pdo->lastInsertId();
foreach($_SESSION['CARRITO'] as $i=>$p){    
    $query=$pdo->prepare("INSERT INTO `detallesventas` (`ID`, `IDVenta`, `IDProducto`, `PrecioUnitario`, `Cantidad`, `Entregado`) 
    VALUES (NULL, :IDVenta, :IDProducto, :PrecioUnitario, :Cantidad, '0');");
//echo "<h2>".$total."</h2>";
$query->bindParam(":IDVenta",$idVenta);
$query->bindParam(":IDProducto",$p['ID']);
$query->bindParam(":PrecioUnitario",$p['PRECIO']);
$query->bindParam(":Cantidad",$p['CANTIDAD']);
$query->execute();
}}

?>
 <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=USD"></script>

<div class="jumbotron text-center">
    <h1 class="display-4">Pago</h1>
    <hr class="my-4">
    <p class="lead">Estas a punto de pagar con paypal</p>

<h4>$
    <?php 
    echo number_format($total, 2);
    ?>
</h4>
    <div id="paypal-button-container"></div>
    <p></p>
</div>



    <!-- Donde dice sb cambiar para poner el user -->
    <script src="https://www.paypal.com/sdk/js?client-id=sb&currency=MXN"></script>

    <script>
        // Render the PayPal button into #paypal-button-container
        paypal.Buttons({

            // Set up the transaction
            createOrder: function(data, actions) {
                return actions.order.create({
                    purchase_units: [{
                        amount: {
                            value: '0.01'
                        }
                    }]
                });
            },

            // Finalize the transaction
            onApprove: function(data, actions) {
                return actions.order.capture().then(function(details) {
                    // Show a success message to the buyer
                    alert('Transaction completed by ' + details.payer.name.given_name + '!');
                });
            }


        }).render('#paypal-button-container');
    </script>
</body>
    
<?php
include 'pie.php';
?>