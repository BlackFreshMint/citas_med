<?php

$servidor = "localhost";
$usuario = "root";
$password = "";
$base = "cimec2";
$conn = new mysqli($servidor, $usuario, $password, $base);

if (mysqli_connect_error()) {
    die("Conexion fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "GET" && isset($_GET['Curp'])) {
    $Curp = $_GET['Curp'];

    $sql_citas = "SELECT c.*, p.Nombre AS NombrePaciente, e.Especialidad AS NombreEspecialidad, d.Nombre AS NombreDoctor
                  FROM citas c
                  INNER JOIN pacientes p ON c.Curp_paciente = p.Curp
                  INNER JOIN especialidades e ON c.Especialidad_id = e.Id_especialidad
                  INNER JOIN doctores d ON c.Doctor_id = d.Id_doctor
                  WHERE c.Curp_paciente = '$Curp'";
    $result_citas = $conn->query($sql_citas);

    if (!$result_citas) {
        die("Error en la consulta de citas: " . $conn->error);
    }

    ob_start();
    ?>
    <h2>Citas para el paciente <?php echo $Curp; ?></h2>
    <?php
    if ($result_citas->num_rows > 0) {
        echo "<ul>";
        while ($row_cita = $result_citas->fetch_assoc()) {
            echo "<li>";
            echo "Fecha: " . $row_cita['Dia'] . " - Especialidad: " . $row_cita['NombreEspecialidad'] . " - Doctor: " . $row_cita['NombreDoctor'];
            echo "</li>";
        }
        echo "</ul>";
    } else {
        echo "<p>No hay citas para este paciente.</p>";
    }
    $citasInfo = ob_get_clean();
    echo '<div id="citasModal">' . $citasInfo . '</div>';
}
$conn->close();
?>