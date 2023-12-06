<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "cimec2";

    $conn = new mysqli($servername, $username, $password, $database);

    if (mysqli_connect_error()) {
        die("Failed Connection".$conn-> connect_error);
    }

    $Curp = $_POST['Curp'];
    $Nombre = $_POST['Nombre'];
    $Apellido = $_POST['Apellido'];
    $Correo = $_POST['Correo'];
    $Telefono = $_POST['Telefono'];
    $Direccion = $_POST['Direccion'];
    $Unidad_Medica = $_POST['Unidad_Medica'];


    $sqlcreate = "INSERT INTO PACIENTES (Curp,Nombre,Apellido,Correo,Telefono,Direccion,Unidad_Medica) VALUES ('$Curp','$Nombre','$Apellido','$Correo','$Telefono','$Direccion','$Unidad_Medica')";

    if ($conn->query($sqlcreate) === TRUE) {
        echo "User correctly create";
    } else {
        echo "Error al crear usuario".$conn->error;
    }

    $conn->close();

    ?>
