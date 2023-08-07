<?php 
  require_once "Pconnect.php";
  $id_producto=$_GET['id']; 
  $sql="delete from producto where id_producto = $id_producto";
  $result=mysqli_query($mysqli, $sql); 
  header("Location: PborrarProduct.php"); 
?> 