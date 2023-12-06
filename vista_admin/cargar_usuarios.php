<?php
    $servidor="localhost";
    $usuario="root";
    $password="";
    $base="cimec2";
    $cone= new mysqli($servidor,$usuario,$password,$base);

    if($cone->connect_error){
        die("Error en la conexión: " . $cone->connect_error);
    }

    $sql= "SELECT * FROM pacientes";
    $result = $cone->query($sql);

    // Verificar si hay un error en la consulta
    if (!$result) {
        die("Error en la consulta: " . $cone->error);
    }

    if ($result->num_rows > 0) {
        while ($row = $result->fetch_assoc()) {
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
                    <button onclick='mostrarEditarUsuario(
                        \"{$row['Curp']}\",
                        \"{$row['Nombre']}\",
                        \"{$row['Apellido']}\", 
                        \"{$row['Correo']}\",
                        \"{$row['Telefono']}\",
                        \"{$row['Direccion']}\",
                        \"{$row['Unidad_Medica']}\")'>Editar
                    </button>
                    <button onclick='eliminarUsuario(\"{$row['Curp']}\")'>Eliminar</button>
                    <button onclick='mostrarCitas(\"{$row['Curp']}\")'>Citas</button>
                </td>
            </tr>";
        }
    
    } else {
        echo "<tr><td colspan='7'>No hay usuarios</td></tr>";
    }
    
    $cone->close();
?>