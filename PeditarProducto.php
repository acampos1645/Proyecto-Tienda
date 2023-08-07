<?php 
require_once "Pconnect.php";
$sql="select * from producto";
$result=mysqli_query($mysqli, $sql); 
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
      <td colspan="6"><h1>LISTA DE PRODUCTOS</h1></td>
      </tr>
        <tr>
        <td align="center" bgcolor="#66FFFF"><strong>Marca</strong></td>
        <td align="center" bgcolor="#66FFFF"><strong>Nombre</strong></td>
        <td align="center" bgcolor="#66FFFF"><strong>Talla</strong></td>
        <td align="center" bgcolor="#66FFFF"><strong>Precio</strong></td>
        <td align="center" bgcolor="#66FFFF"><strong>id_prodcuto</strong></td>
        <td colspan="2" align="center" bgcolor="#66FFFF"><strong>Accion</strong></td>
      </tr>
<?php
  while($DATA = mysqli_fetch_assoc($result))
  { 
?>

  <tr>
    <td><?php echo $DATA['marca']; ?></td>
    <td><?php echo $DATA['nombre']; ?></td>
    <td><?php echo $DATA['talla']; ?></td>
    <td><?php echo $DATA['precio']; ?></td>
    <td><?php echo $DATA['id_producto']; ?></td>
    <td><a href="Peditar.php?ID=<?php echo $DATA['id_producto']; ?>">EDITAR</a></td>
  </tr>

<?php 
  }
?>
    </table>
    
  </div>
  <?php
  include("Pfooter.php");
  ?>
</body>

</html>