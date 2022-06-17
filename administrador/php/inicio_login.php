<?php
    // include 'conexion1.php';  // Importamos el archivo conexion_be.php que contiene la conexión a la base de datos.

    // $usuario = $_POST['correo']; // Recibimos el usuario del correo.
    // $password= $_POST['contrasena']; // Recibimos la contraseña del usuario.
    // // $contrasena_hash = hash ("sha256", $contrasena); // Desencriptamos la contraseña.

    // $query="INSERT INTO  login ( nombre, contraseña)
    //                   VALUE ('$usuario','$password')";


    //  $ejecutar = mysqli_query($conexion, $query); //ejecute la consulta//




    if($_POST){
        echo '<script language="javascript">alert("Error de autentificacion");window.location.href="index.html"</script>';

        // alert("bienvenido a nuestro sitio web");
        header('Location:home2.php');
    }

?>