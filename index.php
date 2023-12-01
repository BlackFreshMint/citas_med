<?php include "views/navbar.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>INDEX</title>
</head>
<body>

    <div id="bienvenido">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <div id="welcome">
                        <h1>BIEVENIDO A CIMEC</h1>
                        <p>Unos de los mejores servicios medicos a su disposicion. Conozca un poco mas de nosotros.</p>
                        <a href="#medicine"><button>MAS <img src="res/icons/arrow-right.svg" alt="arrow-right"></button></a>
                    </div>
                </div>
                <div class="col-md-6">
                    <div id="img_welcome">
                        <img src="res/img/doctor1.png" alt="doctor1">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div id="agenda_con_nosotros">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div id="options_index">
                        <h1>AGENDA CON NOSOTROS</h1>
                        <div class="separacion">
                            <div class="option_left">
                                <button onclick="window.location.href='agendar.php'"><img src="res/icons/calendar-day.svg" alt="schedule"> AGENDAR CITA</button>
                            </div>
                            <div class="option_center">
                                <button><img src="res/icons/calendar-days.svg" alt="calendar"> MIS CITAS</button>
                            </div>
                            <div class="option_right">
                                <button><img src="res/icons/stethoscope.svg" alt="cope"> DOCTORES Y ESPECIALISTAS</button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div id="medicine">
                    <h2>ACERCA DE MEDICINA.</h2>
                    <p>"En el corazón de la salud, reservamos tu bienestar."</p>
                    <hr>
                    <div class="medicine_separation">
                        <div class="med_sep_left">
                            <h3>¿Medicina?</h3>
                            <p>La medicina es el arte de sanar, la ciencia de cuidar, y el motor de la vida. Encuentra inspiración en la búsqueda constante de un cuerpo y mente saludables.</p>
                        </div>
                        <div class="med_sep_center">
                            <h3>Metas</h3>
                            <ol>
                                <li>Curar</li>
                                <li>Prevenir</li>
                                <li>Investigar</li>
                                <li>Sanar</li>
                                <li>Cuidar</li>
                                <li>Aliviar</li>
                                <li>Innovar</li>
                            </ol>
                        </div>
                        <div class="med_sep_right">
                            <h3>Valores</h3>
                            <ol>
                                <li>Compasión</li>
                                <li>Ética</li>
                                <li>Empatía</li>
                                <li>Integridad</li>
                                <li>Paciencia</li>
                                <li>Responsabilidad</li>
                            </ol>
                        </div>
                    </div>
                    <h2>Nuestros Servicios</h2>
                    <hr>
                    <div id="service_separation">
                        <div class="service_left">
                            <ul style="list-style: none;">
                                <li>1.- Consultas médicas de calidad.</li>
                                <li>2.- Diagnóstico preciso y tratamientos efectivos.</li>
                                <li>3.- Atención integral centrada en tu bienestar.</li>
                                <li>4.- Programas de prevención y promoción de la salud.</li>
                            </ul>
                        </div>
                        <div class="service_right">
                            <ul style="list-style: none;">
                                <li>5.- Sistema de citas en línea fácil de usar.</li>
                                <li>6.- Amplias especialidades médicas.</li>
                                <li>7. Laboratorios y pruebas internas.</li>
                                <li>8. Farmacia en sitio.</li>
                                <li>9. Servicio de emergencia 24/7.</li>
                            </ul>
                        </div>
                    </div>
                </div>

            </div>
            <div class="col-md-4">
                <div id="doctor2">
                    <img src="res/img/doctor2.png" alt="doctor2">
                </div>
            </div>
        </div>
    </div>

</body>
</html>

<?php include "views/footer.php" ?>