<?php
require_once "Pconnect.php";

if(isset($_GET["id"]) && isset($_GET["precio"]) && isset($_GET["cantidad"])) {
    //Obtener los valores de ID, precio y cantidad desde la URL
    $id = $_GET["id"];
    $precio = $_GET["precio"];
    $cantidad = $_GET["cantidad"];
    $id_cliente = $_GET["cantidad"];

    //Comprobar si el producto ya existe en la tabla de carrito del usuario actual
    $sql = "SELECT * FROM pedido WHERE id_producto = $id AND id_cliente = $id_cliente";
    $result = mysqli_query($mysqli, $sql);
    $rowcount = mysqli_num_rows($result);

    if ($rowcount > 0) {
        //Actualizar la cantidad del producto en el carrito
        $sql = "UPDATE pedido SET cantidad = cantidad + $cantidad WHERE id_producto = $id AND id_cliente = $id_cliente";
    } else {
        //Agregar el producto al carrito
        $sql = "INSERT INTO pedido (id_producto, id_cliente, cantidad, precio) VALUES ($id_cliente=$id_cliente+1, $id=$id, $cantidad, $precio)";
    }

    //Ejecutar la consulta SQL
    mysqli_query($mysqli, $sql);
}

//Redirigir al usuario de vuelta a la página de inicio
header("Location: Pinicio.php");
exit;
?>