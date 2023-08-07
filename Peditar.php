<?php
require_once "Pconnect.php";
error_reporting(E_ALL ^ E_NOTICE ^ E_WARNING); 
$ID = $_REQUEST['ID']; //este id es el que viene x parametro
if (isset($_POST['submit']))
{
  if(empty($_POST['marca']))
  {
    echo "<script>alert('Debe digitar la marca')</script>";
  exit;
  }
  else
  {
   $marca = $_POST['marca'];
  }
  if(empty($_POST['nombre']))
  {
    echo"<script>alert('Debe digitar el nombre')</script>";
    exit;
  }
  else
  {
    $nombre = $_POST['nombre'];
  }
  if(!empty($_POST['talla']))
  {
    $talla = $_POST['talla'];
  }
  else
  {
    echo "<script>alert('Debe digitar la talla')</script>";
    exit;
  }
  if(!empty($_POST['precio']))
  {
    $precio = $_POST['precio'];
  }
  else
  {
    echo "<script>alert('Debe digitar el precio')</script>";
    exit;
  }

  $consulta = "UPDATE producto SET Marca='$marca',Nombre='$nombre',Talla='$talla',Precio='$precio' WHERE id_producto=$ID";
  $resultado = mysqli_query($mysqli,$consulta);
    if ($resultado==TRUE)
    {
      echo "<script>alert('EDITADO CON EXITO')</script>";
      echo "<script>window.location='PeditarProducto.php'</script>";//revisar porque no salio
    }
    else
    {
      echo "<script>alert('ERROR - NO SE PUDO INGRESAR')</script>";
    }
}
$sql="SELECT * FROM producto` WHERE id_producto=$ID";
$result=mysqli_query($mysqli, $sql);
$DATA = mysqli_fetch_assoc($result);
?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="\Proyecto\PEstiloH.css" rel="stylesheet" type="text/css" media="screen" />
  <title>SHOP ATLETIC INICIO</title>
</head>

<body>
  <?php
  include("Pheader.php");
  ?>
  <div id="contenido">
    <table width="600" align="center">
      <tr>
      <td colspan="6"><h1>MARCAS DISPONIBLES</h1></td>
      </tr>
<form id="form1" name="form1" method="post" action="">
      <tr>
        <td colspan="2"><h3>Editar - Producto</h3></td>
      </tr>
      <tr>
        <td width="15%">Marca</td>
          <td><label for="marca"></label>
          <input name="marca" type="text" id="marca" value="<?php echo $DATA['marca']; ?>"
        </td>
      </tr>
      <tr>
        <td>Nombre</td>
          <td><label for="nombre"></label>
          <input name="nombre" type="text" id="nombre" value="<?php echo $DATA['nombre'];?>"
        </td>
      </tr>
      <tr>
        <td>Talla</td>
          <td><label for="talla"></label>
          <input name="talla" type="text" id="talla" value="<?php echo $DATA['talla']; ?>" 
        </td>
      </tr>
      <tr>
        <td>Precio</td>
          <td><label for="precio"></label>
          <input name="precio" type="text" id="precio" value="<?php echo $DATA['precio']; ?>" 
        </td><br>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td><input type="submit" name="submit" id="submit" value="Editar Datos" /></td>
      </tr><br><br>
</table>
</form>
  <?php
  include("Pfooter.php");
  ?>
</body>
</html>