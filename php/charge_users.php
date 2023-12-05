<?php
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "cimec2";

    $conn = new mysqli($servername, $username, $password, $database);

    if (mysqli_connect_error()) {
        die("Failed Connection".$conn-> connect_error);
    }

    $sql = "Select * FROM PACIENTES";
    $result = $conn -> query($sql);

    if ($result -> num_rows > 0) {
       while ($row = $result -> fetch_assoc()){
        echo "
        <tr>
            <td>{$row['Curp']}</td>
            <td>{$row['Nombre']}</td>
            <td>{$row['Apellido']}</td>
            <td>{$row['Correo']}</td>
            <td>{$row['Telefono']}</td>
            <td>{$row['Direccion']}</td>
            <td>{$row['Unidad_Medica']}</td>
            <td>
                <button onclick='ShowEditUser(
                    \"{$row['Curp']}\",
                    \"{$row['Nombre']}\",
                    \"{$row['Apellido']}\",
                    \"{$row['Correo']}\",
                    \"{$row['Telefono']}\",
                    \"{$row['Direccion']}\",
                    \"{$row['Unidad_Medica']}\",

                )'>
                    EDITAR
                </button>

                <button onclick='ShowDeleteUser(
                    \"{$row['Curp']}\"
                )'>
                    ELIMINAR
                </button>

                <button onclick='ShowCreateUser()
                    \"{$row['Curp']}\",
                    \"{$row['Nombre']}\",
                    \"{$row['Apellido']}\",
                    \"{$row['Correo']}\",
                    \"{$row['Telefono']}\",
                    \"{$row['Direccion']}\",
                    \"{$row['Unidad_Medica']}\"
                '>
                    CREAR
                </button>

            </td>
        </tr>";
       }
       } else {
        echo "
            <tr>
                <td> colspan = '7'>There's no users</td>
            </tr>";
    }
$conn -> close();
?>
