<?php
	$link = mysqli_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysqli_select_db($link,"galletas") or die("<h2>Error de Conexion</h2>");
	$Pass=$_POST['Password'];
    $usuario=$_POST['Username'];
   
	$query=(“SELECT UsuarioLog,PassLog FROM Login “
         . “WHERE UsuarioLog='”.mysql_real_escape_string($nombre).“‘ and “
         . “PassLog='”.mysql_real_escape_string($pass).“‘”);
$rs= mysql_query($query);
$row=mysql_fetch_object($rs);
$nr = mysql_num_rows($rs);
if($nr == 1){
echo ‘No ingreso’;
}
else if($nr == 0) {
     header(“Location:segundo.html”);
}

?>