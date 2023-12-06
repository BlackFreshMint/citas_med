<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$base = "cimec2";
$cone = new mysqli($servidor, $usuario, $password, $base);

if (mysqli_connect_error()) {
    die("Conexion fallida: " . $cone->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Cita_id'])) {
    $Cita_id = $_POST['Cita_id'];

    // Eliminar el usuario
    $sql_delete = "DELETE FROM citas WHERE Cita_id = '$Cita_id'"; // Agregué comillas al valor de $Curp

    if ($cone->query($sql_delete) === TRUE) {
        echo "Cita eliminada correctamente";
    } else {
        echo "Error al eliminar cita: " . $cone->error;
    }
}

$cone->close();
?>
