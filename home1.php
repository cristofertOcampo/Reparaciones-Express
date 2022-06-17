<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/home.css">
    <title>Reparaciones Express</title>
    <link rel="icon" type="image/jpg" href="img/logo.jpg" />
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:wght@300&display=swap" rel="stylesheet">
</head>

<body>

    <header class="flexsearch1">

        <img src="img/logo2.jpg" alt="logo" class="logo">

        <h3 class="title">Reparaciones Express</h3>

    </header>

    <nav class="inicio_registro">


                    <?php $url="http://".$_SERVER['HTTP_HOST']."/pagina";  ?>


                    <ul >
                    <il class="enlaces"><a href="<?php echo $url;?>/administrador/login.php">iniciar sesion</a></il>
            
                        <il class="enlaces"><a href="<?php echo $url;?>/administrador/registro.php">Resgistrarme</a></il>
                    </ul>

    </nav>
    <hr>
    <div class="container">

        <section>

            <article class="contenido">

                <img class="Img_reparaciones_fachada" src="img/logo3.jpg" alt="Imagen de Reparaciones Express">

                <h2 class="title">Reparaciones Express</h2>

                <p class="info">Para Reparaciones Express es muy grato poner a su disposición y consideración nuestro taller de reparación de vehículos, nuestra experiencia y equipo de profesionales para el mantenimiento preventivo y correctivo de automóviles, camionetas
                    y camperos de todas las marcas.Tecnología de punta, equipos de alta precisión, con nuestra experiencia en reparación de automóviles y equipo de profesionales, estamos seguros de ofrecer soluciones oportunas y confiables a las necesidades
                    de mantenimiento y mecanica automotriz de su vehículo
                </p>

            </article>
            <article class="Como_lo_hacemos">

                <h2 class="title">¿Como lo Hacemos?</h2>

            </article>

        </section>
    </div>


</body>

</html>