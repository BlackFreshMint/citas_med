
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Agenda Tu Cita</title>
    <link rel="stylesheet" href="css/agenda_cit.css">
</head>

<body>

    <div class="container">
       <?php include 'views/nav3.php'?>
        <div class="agenda">
            <h1 class="title">Agenda Tu Cita</h1>
        </div>
        <div class="pregunta2" id="CUENTA">
            <p>CUENTA</p>
            <div class=" pregunta">
                <p class="description">¿Usted ya esta registrado/a en nuestro sistema de servicio de hospital?</p>

                <div class="buttons">
                    <a href="#" class="button si" id="siButton">Si</a>
                    <a href="views/preag2.php" class="button no">No</a>
                </div>
            </div>
        </div>

        <div id="contenidoAdicional" style="display: none;">

            <!-- Contenido adicional que se mostrará cuando el usuario haga clic en "Si" -->
        <div class="pregunta2" id="CUENTA">
            <p>CURP</p>
            <div class=" pregunta">
                    <div class="buttons">
                        <input type="text" class="styled-input">
                                <a href="#" class="button_enviar">ENVIAR</a>

                    </div>
                </div>
            </div>
        </div>

        <?php include 'views/footer.php'?>
    </div>

    <script src="js/agenda_cit.js"></script>
</body>
</html>
