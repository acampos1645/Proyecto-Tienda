<?php 
  require_once "Pconnect.php";
  $id_producto=$_GET['id']; 
  $sql="delete from pedido where id_producto = $id_producto";
  $result=mysqli_query($mysqli, $sql); 
  header("Location: Ppedido.php"); 
?> 