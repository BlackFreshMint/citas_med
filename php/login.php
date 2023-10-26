<?php
session_start();
//detalles
$servidor = "localhost";
$usuario ="root";
$contraseña = "";
$base_datos = "cimec";
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

$sql="SELECT Nombres, Curp FROM pacientes
WHERE Nombres = '$username'
AND Curp = '$codigo'";

$result = $conn -> query($sql);

if ($result -> num_rows > 0){
    $_SESSION ['username'] = $username;
    header("location:../views/especialistas.php");
    exit;
}
else{
    echo "inicio fallo. <a href ='../index.html'> INTENTELO DE NUEVO</a>";
    exit;
}
$conn ->close();

?>
