<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login y Register - MagtimusPro</title>

    <link rel="stylesheet" href="PEstilos.css">
</head>

<body>
    <main>

        <div class="contenedor__todo">
            <div class="caja__trasera">
                <div class="caja__trasera-login">
                    <h3>¿Ya tienes una cuenta?</h3>
                    <p>Inicia sesión para entrar en la página</p>
                    <button id="btn__iniciar-sesion">Iniciar Sesión</button>
                </div>
                <div class="caja__trasera-register">
                    <h3>¿Aún no tienes una cuenta?</h3>
                    <p>Regístrate para que puedas iniciar sesión</p>
                    <button id="btn__registrarse">Regístrarse</button>
                </div>
            </div>

            <!--Formulario de Login y registro-->
            <div class="contenedor__login-register">
                <!--Login-->
                <form action="PIngreso_usuario.php" method="POST" class="formulario__login">
                    <h2>Iniciar Sesión</h2>
                    <input type="text" placeholder="Usuario" name="user">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <button>Entrar</button>
                </form>

                <!--Registro del Usuario-->
                <!--<form action="PRegistro_Usuario.php" Esta mandando los datos a esa ubicación-->
                <!--method="POST" Esto hace que se envien los datos-->
                <form action="PRegistro_Usuario.php" method="POST" class="formulario__register">
                    <h2>Regístrarse</h2>
                    <input type="text" placeholder="Nombre completo" name="nombre_completo">
                    <input type="text" placeholder="Correo Electronico" name="email">
                    <input type="text" placeholder="Dirección" name="direc">
                    <input type="text" placeholder="Teléfono" name="telef">
                    <input type="password" placeholder="Contraseña" name="contrasena">
                    <input type="text" placeholder="Usuario" name="usuario">
                    <button>Regístrarse</button>
                </form>
            </div>
        </div>

    </main>
    <!--Esto lleva a las funciones de Java-->
    <script src="PFuncion.js"></script>
</body>

</html>