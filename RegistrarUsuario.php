
<?php
	$link = mysqli_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysqli_select_db($link,"galletas") or die("<h2>Error de Conexion</h2>");
	$nombre=$_POST['Name'];
    $usuario=$_POST['Username'];
    $direccion=$_POST['Dir'];
    $Correo=$_POST['Email'];
    $Pass=$_POST['Pass'];
	
	mysqli_query($link, "INSERT INTO clientes VALUES('','$nombre','$usuario','$Correo', '$Pass','$direccion')") or die("<h2>Error Guardando los datos</h2>");

?>