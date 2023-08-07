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
    <title>SHOP ATLETIC BORRAR</title>
      <style>
        #contenido{
          margin:0 auto;
          width: 600px;
        }
        table{
          text-align: center;
          color: white;
          background-color: #18243a;
        }
      </style>
  </head>

  <body>
  <?php
  include("Pheader.php");
  ?>
  <div id="contenido">
    <table width="400" align="center">
      <tr>
        <td colspan="6"><h1>ADMINISTRACION DE PRODUCTOS</h1><br></td>
      </tr>
      <tr>
        <td>&nbsp;Marca</td>
        <td>&nbsp;Nombre</td>
        <td>&nbsp;Precio</td>
        <td>&nbsp;id_producto&nbsp;</td>
      </tr> 

      <?php 
  while($row = mysqli_fetch_assoc($result)) { 
  printf("<tr><td>&nbsp;%s</td><td>&nbsp;%s&nbsp;</td><td>&nbsp;%s</td><td><a href='Pborrar.php?id=%s'>BORRAR</a></td></tr>", $row["marca"],$row["nombre"],$row["precio"],$row["id_producto"]); 
  } 
  mysqli_close($mysqli); 
      ?> 
      
      </table>
    </div>
    <?php
    include("Pfooter.php");
    ?>
  </body>

  </html>