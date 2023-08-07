  <?php 
  require_once "Pconnect.php";
  $sql="SELECT * FROM `producto` WHERE `marca` = 'NIKE';";
  $result=mysqli_query($mysqli, $sql); 
  ?> 
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="\Proyecto\PEstiloH.css" rel="stylesheet" type="text/css" media="screen" />
    
    <title>SHOP ATLETIC PRODUCTOS NIKE</title>
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
        <td colspan="6"><h1>PRODUCTOS NIKE</h1></td>
        </tr>
        <?php
          while($DATA = mysqli_fetch_assoc($result))
          {
          ?>
          <tr>
          <td>
            <img src="<?php echo $DATA['imagen'];?>" width="550px"><br>
            <?php echo $DATA['nombre'];?><br>
            <?php echo "Talla ".$DATA['talla'];?><br>
            <?php echo "₡".$DATA['precio'];?><br>

            <a href="Pagregar.php?id=<?php echo $DATA['id_producto']; ?>&precio=<?php echo $DATA['precio']; ?>&cantidad=1"><h3>Comprar</h3></a><hr>
          </td>
          </tr>
        <?php } ?>
      </table>
    </div>
    <?php
    include("Pfooter.php");
    ?>
  </body>

  </html>