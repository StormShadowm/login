<?php
session_start();

if(!isset($_SESSION['usuario'])){
  echo'
  <script>
    alert("Debes iniciar sessión antes");
    window.location = "index.php";
  </script>  
  ';
die();
session_destroy();
}
?>

<!DOCTYPE html>
<html lang="en">
 <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Bienvenida</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin />
    <link
      href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,500;1,700;1,900&display=swap"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="assets/ccs/estilos_bienvenida.css" />
  </head>
  <body>
    <header>
      <div class="header__superior">
        <div class="logo">
          <img src="assets/images/netflix.png" alt="" />
        </div>

        <div class="search">
          <input type="search" placeholder="¿Qué deseas buscar?" />
          <a id="btn__cerrar-sesion" id="inputSearch" href="php/cerrar_session.php" >Cerrar sesión</a>
        </div>
      </div>

      <div class="container__menu">
        <div class="menu">
          <nav>
            <ul>
              <li><a href="#" id="selected"></a></li>
              <li>
                <a href="#">Servicios</a>
                <ul>
                  <li><a href="diseno_web.php">DISEÑO WEB</a></li>
                  <li><a href="#">DISEÑO GRAFICO</a></li>
                  <li><a href="#">ORDENADORES</a></li>
                  <li><a href="#">SERVIDORES</a></li>
                  <li><a href="#">ANALISTA</a></li>
                </ul>
              </li>
              <li><a href="#">Nosotros</a></li>
              <li><a href="#">Blog</a></li> 
              <li><a href="#">Cursos</a></li>
              <li><a href="#">Contactos</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>

    <main>
      <article>
        <h2>Organización Internacional para la Estandarización</h2>

        <p>
          La Organización Internacional para la Estandarización conocida como
          ISO, es un cuerpo internacional de establecimiento de estándares
          compuesto por representantes de varias organizaciones nacionales de
          estándares.
        </p>
      </article>

      <article>
        <h2>Organización Internacional para la Estandarización</h2>

        <p>
          La Organización Internacional para la Estandarización conocida como
          ISO, es un cuerpo internacional de establecimiento de estándares
          compuesto por representantes de varias organizaciones nacionales de
          estándares.
        </p>

        <p>...</p>
      </article>

      <article>
        <h2>Organización Internacional para la Estandarización</h2>

        <p>
          La Organización Internacional para la Estandarización conocida como
          ISO, es un cuerpo internacional de establecimiento de estándares
          compuesto por representantes de varias organizaciones nacionales de
          estándares.
        </p>

        <p>...</p>
      </article>
      <article>
        <h2>Organización Internacional para la Estandarización</h2>

        <p>
          La Organización Internacional para la Estandarización conocida como
          ISO, es un cuerpo internacional de establecimiento de estándares
          compuesto por representantes de varias organizaciones nacionales de
          estándares.
        </p>

        <p>...</p>
      </article>
    </main>
  </body>
</html>
