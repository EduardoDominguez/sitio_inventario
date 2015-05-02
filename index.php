<!DOCTYPE html>
<html lang="es">
	<head>
     	<meta charset="utf-8">
        <link rel="stylesheet" type="text/css" href="css/estilo.css"> 
	</head>
<body>
<?php
session_start();
if(!isset($_SESSION['usuario'])) 
{
  header('Location: login.php'); 
  exit();
}
 ?>
<div class="header">
<ul id="menu">
<li><a href="logout.php">Cerrar sesión</a></li>
<li><a href="#">Busqueda</a></li>
<li><a href="#">Bajas</a></li>
<li><a href="#">Cambios</a></li>
<li><a href="#Altas">Altas</a></li>
</ul>
</div>
<h1>BIENVENIDO</h1>
<div  style="background-image: url('img/Pagina_en_mantenimiento.jpg'); width:460px; height:450px; repeat:fixed; position:absolute; top:20%;left: 50%;  margin-left: -200px; margin-top: 10px; position:absolute;">
</div>

 <div style="background-image: url('img/Pagina_en_mantenimiento.jpg'); width:460px; height:450px; repeat:fixed; position:absolute; top:100%;left: 50%;  margin-left: -200px; margin-top: 10px;"><h1></h1><a name="Altas" id="a"></div></a>

	</body>
</html>
