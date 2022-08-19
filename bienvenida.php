<?php
    session_start();

    if(!isset ($_SESSION ['usuario'] ) ){
        echo '
        <script>
        alert("Inicia sesión antes de acceder a esta pagina");
        window.location = "index.php";
        </script>
        ';
        session_destroy();
        die();       
    }
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
    <link rel="stylesheet" href="assets/ccs/estilos_bienvenida.css" />
</head>
<body>
    <h1>Bienvenido a tu pagina de gestión de usuarios</h1>
    <a href ="php/cerrar_session.php" id="btn__cerrar-sesion">Cerrar sesión</a>
</body>
</html>