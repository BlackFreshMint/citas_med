<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$base = "cimec2";
$conn = new mysqli($servidor, $usuario, $password, $base);

if (mysqli_connect_error()) {
    die("Conexion fallida: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Curp'])) {
    $Curp = $_POST['Curp'];

    // Eliminar el usuario
    $sql_delete = "DELETE FROM pacientes WHERE Curp = '$Curp'"; // Agregué comillas al valor de $Curp

    if ($conn->query($sql_delete) === TRUE) {
        echo "Usuario eliminado correctamente";
    } else {
        echo "Error al eliminar usuario: " . $conn->error;
    }
}

$conn->close();
?>