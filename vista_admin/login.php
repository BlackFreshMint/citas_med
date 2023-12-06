<?php
session_start();
//detalles
$servidor = "localhost";
$usuario ="root";
$contraseña = "";
$base_datos = "cimec2";
//crear conexion

$conn = new mysqli(
    $servidor,
    $usuario,
    $contraseña,
    $base_datos
);
//verificacion

if($conn -> connect_error){
    die("Mensaje".$conn-> connect_error);
}

$username = $_POST["username"];
$codigo =  $_POST ["codigo"];

//consulta

$sql="SELECT Nombre, Curp FROM administradores
WHERE Nombre = '$username'
AND Curp = '$codigo'";

$result = $conn -> query($sql);

if ($result -> num_rows > 0){
    $_SESSION ['username'] = $username;
    header("location:crud.php");
    exit;
}
else{
    echo "inicio fallo. <a href ='index1.php'> INTENTELO DE NUEVO</a>";
    exit;
}
$conn ->close();

?>