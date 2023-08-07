  <?php 
  require_once "Pconnect.php";
  $sql="select * from pedido";
  $result=mysqli_query($mysqli, $sql); 
  ?> 
  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SHOP ATLETIC PEDIDO</title>
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
          <td colspan="6"><h1>PEDIDO</h1></td>
        </tr>
        <tr>
          <td colspan="6">&nbsp;</td>
        </tr>
        <tr>
          <td align="center" bgcolor="#66FFFF"><strong>Producto</strong></td>
          <td align="center" bgcolor="#66FFFF"><strong>Cliente</strong></td>
          <td align="center" bgcolor="#66FFFF"><strong>Cantidad</strong></td>
          <td align="center" bgcolor="#66FFFF"><strong>Precio</strong></td>
          <td colspan="2" align="center" bgcolor="#66FFFF"><strong>Acciones</strong></td>
        </tr>
        <?php
          while($DATA = mysqli_fetch_assoc($result))
          { 
        ?>

        <tr>
          <td><?php echo $DATA['id_producto']; ?></td>
          <td><?php echo $DATA['id_cliente']; ?></td>
          <td><?php echo $DATA['cantidad']; ?></td>
          <td><?php echo $DATA['precio']; ?></td>
          <td><a href="PborrarP.php?id=<?php echo $DATA['id_producto']; ?>" onclick="alert('Gracias por su compra, la factura se cargo a su tarjeta')">PAGAR</a></td>
          
        </tr>

        <?php } ?>

      </table>
    </div>
    <?php
    include("Pfooter.php");
    ?>
  </body>

  </html>