<?php

include 'conexion_be.php';

$nombre_completo = $_POST['nombre_completo'];
$correo = $_POST['correo'];
$usuario = $_POST['usuario'];
$contrasena = $_POST['contrasena'];
$contrasena = hash('sha512', $contrasena);


$query = "INSERT INTO usuarios (nombre_completo, correo, usuario, contrasena) 
                        VALUES('$nombre_completo', '$correo', '$usuario', '$contrasena' ) ";

/*verificacion de duplicados*/

$verificar_usuario = mysqli_query($conexion, "SELECT * FROM usuarios WHERE usuario = '$usuario' ");
$verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo' ");

if(mysqli_num_rows($verificar_usuario) > 0 ){
    echo '
        <script>
            alert("El usuari ya se encuenta registrado");
            window.location = "../index.php";
        </script>'
        ;
        exit();
}

if(mysqli_num_rows($verificar_correo) > 0 ){
    echo '
        <script>
            alert("El correo ya se encuenta registrado");
            window.location = "../index.php";
        </script>'
        ;
        exit();
}


$ejecutar = mysqli_query($conexion, $query);


if($ejecutar){
    echo '<script> alert("Usuario almacecado exitosamente")
    window.location = "../index.php";
    </script>';
}else{
    echo '<script> alert("Algo ha salido mal intenta de nuevo")
    window.location = "../index.php";
    </script>';
}

mysqli_close($conexion);



?>