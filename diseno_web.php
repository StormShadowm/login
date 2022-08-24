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
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diseño web</title>
    <link rel="stylesheet" href="assets/ccs/estilos_diseno-web.css">
</head>
<body>
    <header>
      <div class="header__superior">
        <div class="logo">
          <img src="assets/images/netflix.png" alt="" />
        </div>

        <div class="search">
          <input type="search" placeholder="¿Qué deseas buscar?" />
          <a id="btn__cerrar-sesion" href="php/cerrar_session.php" >Cerrar sesión</a>
        </div>
      </div>

      <div class="container__menu">
        <div class="menu">
          <nav>
            <ul>
              <li><a href="bienvenida.php" id="selected"></a></li>
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
    <div class="container__background-triangle">
        <div class="triangle triangle1"></div>
        <div class="triangle triangle2"></div>
        <div class="triangle triangle3"></div>
    </div>

    <div class="container__cards">
        <div class="card">
            <div class="cover__card">
                <img src="assets/images/img-1.jpg" alt="">
            </div>
            <h2>Sabemos cómo aumentar los beneficios</h2>
            <p> La Organización Internacional para la Estandarización conocida como
                ISO, es un cuerpo internacional de establecimiento de estándares
                compuesto por representantes de varias organizaciones nacionales de
                estándares.
            </p>
            <hr>
            <div class="footer__card">
                <h3 class=""user__name>Annie franfort</h3>
                <i>10 de julio</i>
            </div>
        </div>

        <div class="card">
            <div class="cover__card">
                <img src="assets/images/img-2.jpg" alt="">
            </div>
            <h2>Sabemos cómo aumentar los beneficios</h2>
            <p> La Organización Internacional para la Estandarización conocida como
                ISO, es un cuerpo internacional de establecimiento de estándares
                compuesto por representantes de varias organizaciones nacionales de
                estándares.
            </p>
            <hr>
            <div class="footer__card">
                <h3 class=""user__name>Annie franfort</h3>
                <i>10 de julio</i>
            </div>
        </div>

        <div class="card">
            <div class="cover__card">
                <img src="assets/images/img-3.jpg" alt="">
            </div>
            <h2>Sabemos cómo aumentar los beneficios</h2>
            <p> La Organización Internacional para la Estandarización conocida como
                ISO, es un cuerpo internacional de establecimiento de estándares
                compuesto por representantes de varias organizaciones nacionales de
                estándares.
            </p>
            <hr>
            <div class="footer__card">
                <h3 class=""user__name>Annie franfort</h3>
                <i>10 de julio</i>
            </div>
        </div>
    </div>
</body>
</html>