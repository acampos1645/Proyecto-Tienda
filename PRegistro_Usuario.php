<?php   
    /*Incluye le coneccion*/
    include 'Pconnect.php';

    //Varriables donde guardan los datos
    $nombre_completo = $_POST['nombre_completo'];
    $email = $_POST['email'];
    $direc = $_POST['direc'];
    $telef = $_POST['telef'];
    $contrasena = $_POST['contrasena'];
    $usuario = $_POST['usuario'];

   //Consulta para guardar
    $query = "INSERT INTO usuario(nombre, email, direccion, telefono, contrasena, user) VALUES ('$nombre_completo', '$email', '$direc', '$telef', '$contrasena', '$usuario')";
  

    //Verificar que no se repita el correo.
    $verif_correo = mysqli_query($mysqli, "SELECT * FROM usuario WHERE email = '$email'");
   
   //Estamos valorando si el campo no esta vacido y si esta repetido.
   if(mysqli_num_rows($verif_correo) > 0)
    {
        echo'
            <script>
                alert("Este correo ya esta registrado, intenta con otro diferente");
                window.location = "../PLogin.php"; 
            </script>
        ';
        exit(); //Esto hace que el momento que entra aqui a EXIT() todo el codigo que esta hacia abajo no se ejecute.
    }

    //Verificar que no se repita el USER.
    $verif_user = mysqli_query($mysqli, "SELECT * FROM usuario WHERE user ='$usuario'");
   
   //Estamos valorando si el campo no esta vacido y si esta repetido.
   if(mysqli_num_rows($verif_user) > 0)
    {
        echo'
            <script>
                alert("Este usuario ya esta registrado, intenta con otro diferente");
                window.location = "../Proyecto/PLogin.php"; 
            </script>
        ';
        exit(); //Esto hace que el momento que entra aqui a EXIT() todo el codigo que esta hacia abajo no se ejecute.
    }


    $ejecutar = mysqli_query($mysqli, $query);
        /*varible de coneccion ^ */
    if($ejecutar)
    {
     echo'
        <script>
            alert("Usuario almacenado exitosamente");
            window.location = "../Proyecto/PLogin.php";
        </script>
        ';
    } 
    else
    {
        /*La funcion window.location = "../PLogin.html"; lo que hace es devolverme al menu principal */
        echo'
        <script>
            alert("Intente de nuevo, el usuario no se puede almacenar");
            window.location = "../Proyecto/PLogin.php"; 
        </script>
        ';
    }   
    mysqli_close($mysqli);
?> 