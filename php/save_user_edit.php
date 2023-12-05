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

    $sqlupdate = "UPDATE PACIENTES SET Nombre = '$Nombre', Apellido = '$Apellido' WHERE Curp = '$Curp'";

    if ($conn->query($sqlupdate) === TRUE) {
        echo "User correctly updated";
    } else {
        echo "Error al actualizar usuario".$conn->error;
    }

    $conn->close();
    ?>
