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
            <td>{$row['Cita_id']}</td>
            <td>{$row['Curp_paciente']}</td>
            <td>{$row['Especialidad_id']}</td>
            <td>{$row['Doctor_id']}</td>
            <td>{$row['Dia']}</td>
            <td>{$row['Observaciones']}</td>

            <td>
                <button onclick='mostrarEditarUsuario(
                    \"{$row['Cita_id']}\",
                    \"{$row['Curp_paciente']}\",
                    \"{$row['Especialidad_id']}\",
                    \"{$row['Doctor_id']}\"),
                    \"{$row['Dia']}\",
                    \"{$row['Observaciones']}\",'>Editar
                </button>
                <button onclick='eliminarUsuario(\"{$row['Cita_id']}\")'>Eliminar</button>
            </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='7'>No existen citas</td></tr>";
}

$cone->close();
?>
