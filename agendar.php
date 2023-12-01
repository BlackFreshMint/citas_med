<?php include "views/navbar.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" href="css/agendar.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Document</title>
</head>
<body>

    <div id="fom">
        <div class="container">
            <div class="row">
                <div class="col-md-7">
                    <div id="formulario">
                        <h1>AGENDA TU CITA</h1>
                        <p>Recuerda de revisar que los datos de la cita sean correctos antes de agendar, esto para evitarte problemas con tu agenda personal.</p>
                        <hr>
                        <form action="">
                            <label for="">CURP <span>*</span></label>
                            <input type="text">
    
                            <label for="">Especialidad <span>*</span></label>
                            <select class="input1">
                            <?php
                                $servidor = "localhost";
                                $usuario = "root";
                                $password = "";
                                $base = "cimec2";
                                $conexion = new mysqli($servidor, $usuario, $password, $base);

                                if ($conexion->connect_error) {
                                    die("Error en la conexión: " . $conexion->connect_error);
                                }

                                // Consulta para obtener la lista de especialistas
                                $query = "SELECT id_Especialidad, especialidad FROM especialidades";
                                $result = $conexion->query($query);

                                // Mostrar opciones del desplegable
                                while ($row = $result->fetch_assoc()) {
                                    echo "<option value='" . $row['id_especialidad'] . "'>" . $row['especialidad'] . "</option>";
                                }

                                // Cerrar la conexión
                                $conexion->close();
                            ?>
                        </select>
                            
                            <label for="">Observaciones</label>
                            <input type="text">
    
                            <a class="pregunta" href="register.php">¿No estás registrado?</a>
                        </form>
                    </div>
                </div>
                <div class="col-md-5">
                    <div id="img_agendar">
                        <img src="res/img/consultorio.png" alt="consultorio">
                    </div>
                </div>
            </div>
        </div>
    </div>
    

    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div id="dia_cita">
                    <h1>DIA DE TU CITA</h1>
                    <p>Solo falta seleccionar el dia que deseas tener tu cita. Recuerda que la leyenda que se encuentra en la parte derecha de la pantalla te ayudara a saber que dias estan disponibles para agendar una cita y cuales no.</p>
                    <hr>
                    <iframe
                        id="inlineFrameExample"
                        title="Inline Frame Example"
                        width="1200"
                        height="1000"
                        src="php/calendario.php">
                    </iframe><br>

                    <button onclick="window.location.href='confirmation2.php'">AGENDAR</button>
                </div>
            </div>
        </div>
    </div>
</body>
</html>

<?php include "views/footer.php" ?>