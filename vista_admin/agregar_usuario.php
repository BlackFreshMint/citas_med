<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$base = "cimec2";
$cone = new mysqli($servidor, $usuario, $password, $base);

if ($cone->connect_error) {
    die("Error en la conexión: " . $cone->connect_error);
}

// Verificar si se envió información para agregar un usuario
if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Curp']) && isset($_POST['Nombre']) && isset($_POST['Apellido']) && isset($_POST['Correo']) && isset($_POST['Telefono']) && isset($_POST['Direccion']) && isset($_POST['Unidad_Medica'])) {

    // Obtener los datos del formulario
    $Curp=$_POST['Curp'];
    $Nombre= $_POST['Nombre'];
    $Apellido=$_POST['Apellido'];
    $Correo=$_POST['Correo'];
    $Telefono=$_POST['Telefono'];
    $Direccion=$_POST['Direccion'];
    $Unidad_medica=$_POST['Unidad_medica'];

    // Construir la consulta SQL
    $sql = "INSERT INTO pacientes (Curp ,Nombre, Apellido, Correo, Telefono, Direccion, Unidad_Medica) VALUES ('$Curp', '$Nombre','$Apellido', '$Correo',  '$Telefono', '$Direccion', '$Unidad_Medica')";

    // Ejecutar la consulta y verificar el resultado
    if (mysqli_query($cone, $sql)) {
        echo "Usuario agregado correctamente";
    } else {
        echo "Error en la consulta: " . $sql . "<br>" . mysqli_error($cone);
    }
}

$cone->close();
?>