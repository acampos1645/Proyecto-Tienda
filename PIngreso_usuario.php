<?php
    include 'Pconnect.php';

    $usuario = $_POST['user'];
    $contra = $_POST['contrasena'];
    
    $validar_login = mysqli_query($mysqli, "SELECT * FROM usuario WHERE user= '$usuario' AND contrasena= '$contra'");

    if(mysqli_num_rows($validar_login) > 0)
    {
        header("location: Pinicio.php"); //Esto va a enviar a la pagina principal.(Andy)
        exit;
    }
    else
    {
        echo'
            <script>
                alert("Usuario no existe, por favor verifique los datos introducidos");
                window.location = "../Proyecto/PLogin.php"; 
            </script>
        
        ';
        exit;
    }




?>