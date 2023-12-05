<?php
$servidor = "localhost";
$usuario = "root";
$password = "";
$base = "cimec2";

$cone = new mysqli($servidor, $usuario, $password, $base);

if ($cone->connect_error) {
    die("Error en la conexión: " . $cone->connect_error);
}

$sql = "SELECT * FROM citas";
$result = $cone->query($sql);

if (!$result) {
    die("Error en la consulta: " . $cone->error);
}

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "
        <tr>
            <td>{$row['CITA_ID']}</td>
            <td>{$row['ESPECIALIDAD']}</td>
            <td>{$row['FECHA']}</td>
            <td>{$row['HORA']}</td>
            
            <td>
                <button onclick='mostrarEditarUsuario(
                    \"{$row['CITA_ID']}\",
                    \"{$row['ESPECIALIDAD']}\",
                    \"{$row['FECHA']}\",
                    \"{$row['HORA']}\")'>Editar
                </button>
                <button onclick='eliminarUsuario(\"{$row['CITA_ID']}\")'>Eliminar</button>
            </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='7'>No existen citas</td></tr>";
}

$cone->close();
?>
