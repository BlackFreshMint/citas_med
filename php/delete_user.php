<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "dbtest";

    $conn = new mysqli($servername, $username, $password, $database);

    if (mysqli_connect_error()) {
        die("Failed Connection".$conn-> connect_error);
    }

    $ID_USER = $_POST['ID_USER'];

    $sqldel = "DELETE FROM USERS WHERE ID_USER =".$ID_USER;

    if ($conn->query($sqldel) === TRUE) {
        echo "User correctly deleted";
    } else {
        echo "Error al eliminar usuario".$conn->error;
    }

    $conn->close();

    ?>
