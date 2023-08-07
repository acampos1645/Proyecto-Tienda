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
  <title>SHOP ATLETIC EDICION</title>
</head>

<body>
  <?php
  include("Pheader.php");
  ?>
  <div id="contenido">
    <table width="600" align="center">
      <tr>
      <td colspan="6"><h1>AGREGAR PRODUCTOS</h1><br><br></td>
      </tr>

      <FORM ACTION="Pprocesar.php"> 
        <table width="600" align="center"> 
          <TR> 
            <TD>Marca:</TD> 
            <TD><INPUT TYPE="text" NAME="marca" SIZE="50" MAXLENGTH="100"></TD> 
          </TR> 
          <TR> 
            <TD>Nombre:</TD> 
            <TD><INPUT TYPE="text" NAME="nombre" SIZE="50" MAXLENGTH="100"></TD> 
          </TR> 
          <TR> 
            <TD>Talla:</TD> 
            <TD><INPUT TYPE="number" NAME="talla" SIZE="50" MAXLENGTH="5"></TD> 
          </TR> 
          <TR> 
            <TD>Precio:</TD> 
            <TD><INPUT TYPE="number" NAME="precio" SIZE="50" MAXLENGTH="10"></TD> 
          </TR> 
          <TR> 
            <TD>Imagen:</TD> 
            <TD><INPUT TYPE="text" NAME="imagen" SIZE="50" MAXLENGTH="250"></TD> 
          </TR> 
        </table> <br>
        <INPUT TYPE="submit" NAME="accion" VALUE="AGREGAR"> 
      </FORM> 

    </table>
  </div>
  <?php
  include("Pfooter.php");
  ?>
</body>

</html>