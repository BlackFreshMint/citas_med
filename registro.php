<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/registro.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link rel="stylesheet" href="css/fonts.css">
<link rel="stylesheet" href="css/index.css">

    <title>Document</title>
</head>
<?php include"header.php" ?>
<body>
    <div class="container_">
        <div class="title">
            <h1>SE REGISTRO TU CITA </h1>
        </div>

        <div class="content">
            <div class="div1">
                <p>
                    Se ha confirmado su cita. Recuerda ser puntual y acudir a tu
                    cita a la hora en que se te asigno.
                </p>
                <p>
                Puedes consultar el dia de tu cita si es que lo vuelves a necesitar en el apartado de MIS CITAS en la la pagina principal de nuestro sitio web.
                </p>
                <button class="boton" onclick="window.location.href='index_prueba.php';">
                <p class="boton_letra">Volver al inicio</p>
                </button>
            </div>


            <div class="div2">
                <p>
                    <img class="confirmacion" src="res/img/registro.png">
                </p>
            </div>
        </div>
    </div>
</body>
<?php include"footer.php" ?>
</html>
