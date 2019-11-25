
<?php
	//conexion con la base de datos y el servidor
	$link = mysql_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
	$db = mysql_select_db("galletas",$link) or die("<h2>Error de Conexion</h2>");

	//obtenemos los valores del formulario
	$nombre=$_POST['Name'];
$usuario=$_POST['Username'];
$direccion=$_POST['Dir'];
$Correo=$_POST['Email'];
$Pass=$_POST['Pass'];
	//Obtiene la longitus de un string
	$req = (strlen($nombre)*strlen($UserName)*strlen($Correo)*strlen($Pass)) or die("No se han llenado todos los campos");

	//se confirma la contraseña
	

	//se encripta la contraseña
	$contraseñaUser = md5($pass);

	//ingresamos la informacion a la base de datos
	mysql_query("INSERT INTO clientes VALUES('','$nombre','$usuario','$Correo', '$contraseñaUser','$direccion')",$link) or die("<h2>Error Guardando los datos</h2>");
	echo'
		<script>
			alert("Registro Exitoso");
			location.href="index.html";
		</script>
	'


?>