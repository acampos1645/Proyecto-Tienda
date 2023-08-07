<?php 
  require_once "Pconnect.php";
  $marca=$_GET['marca']; 
  $nombre=$_GET['nombre']; 
  $talla=$_GET['talla']; 
  $precio=$_GET['precio']; 
  $imagen=$_GET['imagen'];
  $mysqli ->query("INSERT INTO producto(marca, nombre, talla, precio, imagen) VALUES('$marca', '$nombre', '$talla','$precio','$imagen')");
  header("Location: Pinsertar.php"); 
?> 