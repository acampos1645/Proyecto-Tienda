<?php
$mysqli = new mysqli("localhost","root","","shop");
if(mysqli_connect_errno()){
printf("Conexión fallida", mysqli_connect_error());
}