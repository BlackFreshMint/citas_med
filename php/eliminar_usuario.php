<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$base = "cimec";
$cone = new mysqli($servidor, $usuario, $password, $base);

if (mysqli_connect_error()) {
    die("Conexion fallida: " . $cone->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['CITA_ID'])) {
    $CITA_ID = $_POST['CITA_ID'];

    // Eliminar el usuario
    $sql_delete = "DELETE FROM citas WHERE CITA_ID = '$CITA_ID'"; // Agregué comillas al valor de $Curp

    if ($cone->query($sql_delete) === TRUE) {
        echo "Cita eliminada correctamente";
    } else {
        echo "Error al eliminar cita: " . $cone->error;
    }
}

$cone->close();
?>