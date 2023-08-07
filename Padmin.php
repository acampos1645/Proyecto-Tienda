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
    <title>SHOP ATLETIC ADMINISTRACION</title>
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
          <td colspan="6"><a href="Pinsertar.php"><h3 style= "color:white";>AGREGAR PRODUCTO</h3></a></td>
        </tr>
        <tr>
            <td colspan="6"><a href="PeditarProducto.php"><h3 style= "color:white";>MODIFICAR PRODUCTO</h3></a></td>
        </tr>
        <tr>
          <td colspan="6"><a href="PborrarProduct.php"><h3 style= "color:white";>ELIMINAR PRODUCTO</h3></a></td>
        </tr><br>
      </table>
    </div>
    <?php
    include("Pfooter.php");
    ?>
  </body>

  </html>