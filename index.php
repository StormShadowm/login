<?php
session_start();

if(isset($_SESSION['usuario']))
  header ("location: bienvenida.php");
?>


<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Login</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/ccs/estilos_index.css" />
  </head>
  <body>
    <main>
      <div class="contenedor__todo">
        <div class="caja__trasera">
          <div class="caja__trasera-login">
            <h3>¿Ya tienes cuenta?</h3>
            <p>Inicia sesion para entrar en la pagina</p>
            <button id="btn__iniciar-sesion">Iniciar sesión</button>
          </div>

          <div class="caja__trasera-register">
            <h3>¿Aún no tienes cuenta?</h3>
            <p>Inicia sesion para entrar en la pagina</p>
            <button id="btn__registrarse">Regístrarse</button>
          </div>
        </div>

        <!-- login-->
        <div class="contenedor__login-register">
          <form action="php/login_usuario_be.php" method = "POST" class="formulario__login">
            <h2>Iniciar sesión</h2>
            <input type="text" placeholder="Correo electrocnico" name = "correo"/>
            <input type="password" placeholder="Contraseña" name = "contrasena"/>
            <button>Entrar</button>
          </form>

          <!--registro-->
          <form action="php/registro_usuario_be.php" method = "POST" class="formulario__register">
            <h2>Regístrarse</h2>
            <input type="text" placeholder="Nombre" name ="nombre_completo" />
            <input type="text" placeholder="Correo electronico" name = "correo"/>
            <input type="text" placeholder="Nombre de usuario" name = "usuario" />
            <input type="password" placeholder="Contraseña" name = "contrasena"/>
            <button>Regístrarse</button>
          </form>
        </div>
      </div>
    </main>
    <script src="assets/js/script.js"></script>
  </body>
</html>
