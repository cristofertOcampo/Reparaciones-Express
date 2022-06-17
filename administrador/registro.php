<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reparaciones Express</title>
    <link rel="stylesheet" href="css1/registro.css">
    <link rel="icon" type="image/jpg" href="/source/img/logo_favicon.jpg" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap" rel="stylesheet">

</head>

<body>



    <form action="php/inicio_registro.php" class="register" id="register"  method="POST">

        <h2 class="titulo_crearCuenta">Crear una cuenta</h2>

        <img class="logo" src="img/logo.jpg" alt="logo de Reparaciones Express">

        <br><br><br>
        <input type="text" class="inputs" name="nombre" id="Nombre" placeholder="Ingrese su Nombre" required>
        <br><br>
        <input type="text" class="inputs" name="apellido" id="Apellido" placeholder="Ingrese su Apellido" required>
        <br><br>
        <input type="email" class="inputs" name="correo" id="Correo" placeholder="Ingrese Correo Electronico" required>
        <br><br>
        <input type="tel" class="inputs" name="telefono" id="Telefono" placeholder="Ingrese Numero Telefono" required>
        <br><br>
        <input type="password" class="inputs" name="contraseña" id="Contraseña" placeholder="Contraseña" required>
        <br><br>
        <input type="password" class="inputs" name="confirme_contraseña" id="Contraseña" placeholder="Confirmar Contraseña" required>
        <br><br>
        <input type="checkbox" name="Terminos_condiciones" id="Terminos_condiciones" required><b> Aceptar <a class="vinculo" href="#">terminos y condiciones</a></b>
        <br>
        <!-- <button>enviar</button> -->
        <button class="button" type="sublim">Registrar</button>
        <br>
        <a href="iniciar_sesion.html" class="vinculo">¿Ya tienes una cuenta?</a>

    </form>




    <script src="js/app.js"></script>
</body>

</html>