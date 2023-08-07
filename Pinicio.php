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
      <td colspan="6"><h1>MARCAS DISPONIBLES</h1></td>
      </tr>
      <tr>
        <td>
          <a href="PproductoA.php"><img src="https://i.pinimg.com/564x/a7/cf/4d/a7cf4d86adf3a08c696773e145aeb695.jpg"><h3>VER MARCA</h3></a><br><br>
          <a href="PproductoN.php"><img src="https://i.pinimg.com/564x/f5/8f/9d/f58f9d284cc3938fc8139c565f300048.jpg"><h3>VER MARCA</h3></a><br><br>
          <a href="PproductoR.php"><img src="https://i.pinimg.com/564x/d9/02/09/d90209f45d9d607780b225072cc6c9ab.jpg"><h3>VER MARCA</h3></a><br><br>
        </td>
      </tr>
    </table>
  </div>

  <?php
  include("Pfooter.php");
  ?>
</body>

</html>