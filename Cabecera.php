
<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Galletas</title>
<link href="css/bootstrap-4.3.1.css" rel="stylesheet" type="text/css">
<style type="text/css">
@import url("webfonts/AnyConv_com_Michland_Script/stylesheet.css");
.jumbotron .display-4 {
    font-family: AnyConv com Michland Script;
}
</style>
</head>

<body style="background-color:#ffecd9">
<div class="jumbotron" >
  <h1 class="display-4" align="center" st="st">Éclaire de Lune</h1>
  <p class="lead" align="center">Gallletas </p>
  <hr class="my-4">
</div>
<nav class="navbar navbar-expand-lg navbar-light bg-light">  <a class="navbar-brand" href="#" ></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent1" aria-controls="navbarSupportedContent1" aria-expanded="false" aria-label="Toggle navigation"> <span class="navbar-toggler-icon"></span> </button>
  <div class="collapse navbar-collapse" id="navbarSupportedContent1">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active"> <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a> </li>
		 <li class="nav-item"> <a class="nav-link" href="Catalogo.php">Productos</a> </li>
      <li class="nav-item"> <a class="nav-link" href="#">Contacto</a> </li>
		 <li class="nav-item"> <a class="nav-link" href="#">Foro</a> </li>
    </ul>
    <form class="form-inline my-2 my-lg-0">
      <input class="form-control mr-sm-2" type="search" placeholder="Buscar" aria-label="Buscar">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Buscar</button>&nbsp;
      <li class="nav-item"> <a class="nav-link" href="Cart.php">Carrito(<?php echo (empty($_SESSION['CARRITO']))?0:count($_SESSION['CARRITO']) ?>)</a> </li>
      <button type="button" class="btn btn-primary">Ingresar</button>&nbsp;
	<a href="Registro.html"> <button type="button" class="btn btn-primary" >Registrarse</button></a>
    </form>

  </div>
</nav>
	