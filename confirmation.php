<?php include"views/navbar.php" ?>
<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/confirmation.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Document</title>
</head>

<body>

<section id="form_container">
    <div class="container text-center">

        <div class="col">&nbsp;</div>

        <div class="col">
            <div class="col" id="title_success">SE COMPLETO TU REGISTRO CON EXITO</div>
            <div class="row" id="n_separator">
                <div class="col" id="body_success_text">
                    Ahora eres un ciudadano que esta inscrito a nuestro servicio hospitalario, con lo cual, el agendar tus citas te resultara mas facil con tus datos ya registrados. Al momento de agendar una cita, el unico dato que tendras que proporcionar es tu CURP.
                    <div class="col">
                        <button class="submit_button" onclick="window.location.href='index.php'">Volver al Inicio</button>
                    </div>
                </div>
                <div class="col">
                    <img src="res/img/corriendos.jpg" class="img-fluid" id="image_success" alt="">
                </div>
            </div>
        </div>

        <div class="col">&nbsp;</div>

    </div>
</section>

</body>
</html>

<?php include"views/footer.php" ?>