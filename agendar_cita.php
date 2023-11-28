<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/agendar_cita.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap" rel="stylesheet">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600&display=swap" rel="stylesheet">

    <title>Document</title>
</head>

<body>
    <div class="container">


        <div class="content">
            <div class="div1">
                <h1>AGENDA TU CITA</h1>

                <p>
                    Recuerda revisar que los datos de la cita sean correctos antes de agendar, esto para evitarte
                    problemas con tu agenda personal.
                </p>

                <hr style="color: black;">

                <p>
                    CURP <span class="asterisco">* </span>
                </p>
                <input class="input1">
                <p>
                    Especialidad  <span class="asterisco">* </span>
                </p>
                <select class="input1">
                    <?php
                   $servidor = "localhost";
                   $usuario = "root";
                   $password = "";
                   $base = "cimec";
                   $conexion = new mysqli($servidor, $usuario, $password, $base);
                   
                   if ($cone->connect_error) {
                       die("Error en la conexión: " . $cone->connect_error);
                   }

                    // Consulta para obtener la lista de especialistas
                    $query = "SELECT Especialidad_id, Nombre_Especialidad FROM especialidades";
                    $result = $conexion->query($query);

                    // Mostrar opciones del desplegable
                    while ($row = $result->fetch_assoc()) {
                        echo "<option value='" . $row['Especialidad_id'] . "'>" . $row['Nombre_Especialidad'] . "</option>";
                    }

                    // Cerrar la conexión
                    $conexion->close();
                    ?>
                </select>

                <p>
                    Observaciones
                </p>
                <input class="input2">
                <br>
                <a class="pregunta" href="tu_url_aqui" >¿No estás registrado?</a>
            </div>
            <div class="div2">
                <p>
                    <img class="fila_espera" src="res/img/Fila_Espera.jpg">
                </p>
            </div>
        </div>
    </div>

    

    <!-- Cierra el primer contenedor antes de abrir el segundo -->
    </div>

    <!-- Segundo contenedor -->
    <div class="div2">
                <!-- Contenedor adicional solo para el calendario -->
                <div class="calendario">
                    <h2>Selecciona el día para tu cita</h2>
                    <input type="date" class="input1">
                    <button class="boton" onclick="window.location.href='registro.html';">
                    <p class="boton_letra">Agendar</p>
</button>
                </div>
                
            </div>
            
        </div>
        
    </div>
</body>

</html>