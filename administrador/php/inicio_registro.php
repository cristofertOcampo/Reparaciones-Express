<?php

    include 'conexion1.php';  //importamos el archivo del formulario donde ingresan los datos//
    
    $nombre=$_POST['nombre'];
    $apellido=$_POST['apellido'];
    $correo=$_POST['correo'];
    $telefono=$_POST['telefono'];
    $contraseña=$_POST['contraseña'];
    $confirme_contraseña= $_POST['confirme_contraseña'];

    // $contrasena_hash = hash ("sha256", $contrasena); // Encriptamos la contraseña.


    $query="INSERT INTO  usuario ( nombre, apellido, correo, telefono, contraseña, confirme_contraseña)
                      VALUE ('$nombre' , '$apellido' , '$correo', '$telefono' , '$contraseña' , '$confirme_contraseña')";


//    $verificar_correo = mysqli_query($conexion, "SELECT * FROM usuarios WHERE correo = '$correo'");

//     if(mysqli_num_rows($verificar_correo) > 0){ // Si el correo ya está registrado, mostramos un mensaje de error.
//         echo '
//             <script>
//                 window.location = "../home1.php";
//                 alert("El correo electronico ya existe, intenta con otro correo.");
//             </script>
//         ';
//         exit();
//     }

    $ejecutar = mysqli_query($conexion, $query); //ejecute la consulta//

    if($_POST){
        echo '<script>alert("Error de autentificacion");</script>';

        // alert("bienvenido a nuestro sitio web");
        header('Location:home2.php');
    }



?>


