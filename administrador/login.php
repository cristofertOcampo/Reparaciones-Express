<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css1/login.css">
    <title>Reparaciones Express</title>
    <link rel="icon" type="image/jpg" href="/source/img/logo_favicon.jpg" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>

    <form action="php/inicio_login.php" class="inicio_sesion" method="POST">

        <h1 class="titulo">Inicia Sesión</h1>
        <img src="img/logo.jpg" class="imgLogo" alt="logo">


        <input type="text" name="correo" class="inputText" id="uno" placeholder="CORREO">

        <input type="password" name="contraseña" class="inputText" id="dos" placeholder="CONTRASEÑA">

        <a href="recuperacion_cuenta.html" class="enlace">Recuperar Contaseña </a>

        <button type="submit" class="button">Iniciar Sesión</button>

        <a href="registro.html" class="enlace">¿Necesitas una cuenta? </a>

        <a href="registro.html" class="enlace">registrate ahora !!! </a>

    </form>


</body>

</html>