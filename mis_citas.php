

<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/citas.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap" rel="stylesheet">
    <title>Citas</title>
</head>
<body>

    <h2>Citas</h2>
    <table id="usuariosTable" border="1">
        <thead>
    
            <tr>
                <td>No cita</td>
                <td>Especialidad</td>
                <td>Fecha</td>
                <td>Hora</td>
                <td>Configurar cita</td>
            </tr>
        </thead>
        <tbody>
        </tbody>
    </table>

    <!-- Botón para agregar usuarios -->
    <button type="button" onclick="abrirModalAgregar()">Agregar cita</button>

    <!-- Modal para agregar usuarios -->
    <div id="modalAgregar" style="display:none;">
        <h3>Agregar cita</h3>
        <form id="formAgregarUsuario">
            No cita: <input type="text" id="addCITA_ID"><br>
            Especialidad: <input type="text" id="addESPECIALIDAD"><br>
            Fecha: <input type="text" id="addFECHA"><br>
            Hora: <input type="text" id="addHORA"><br><br>
            <button type="button" onclick="guardarNuevoUsuario()">Guardar cita</button>
            <button type="button" onclick="cerrarModal('modalAgregar')" style="background-color: red;">Cancelar</button>
        </form>
    </div>
    
    <div id="modalEditar" style="display:none;">
        <h3>Editar cita</h3>
        <form id="formEditarUsuario">
            No cita: <input type="text" id="editCITA_ID"><br>
            Especialidad: <input type="text" id="editESPECIALIDAD"><br>
            Fecha: <input type="text" id="editFECHA"><br>
            Hora: <input type="text" id="editHORA"><br><br>
            <button type="button" onclick="guardarEdicion()">Guardar cita</button>
            <button type="button" onclick="cerrarModal('modalEditar')" style="background-color: red;">Cancelar</button>
        </form>
    </div>

    <script>
        $(document).ready(function() {
            cargarUsuarios();
        });

        function cargarUsuarios() {
            $.ajax({
                url: 'cargar_usuarios.php',
                type: 'GET',
                success: function(response){
                    $('#usuariosTable tbody').html(response);
                }
            });
        }

        function abrirModalAgregar() {
            document.getElementById('modalAgregar').style.display = 'block';
        }

        function guardarNuevoUsuario() {
            var CITA_ID = document.getElementById('addCITA_ID').value;
            var ESPECIALIDAD = document.getElementById('addESPECIALIDAD').value;
            var FECHA = document.getElementById('addFECHA').value;
            var HORA = document.getElementById('addHORA').value;

            $.ajax({
                type: 'POST',
                url: 'agregar_usuario.php',
                data: {
                    CITA_ID: CITA_ID,
                    ESPECIALIDAD: ESPECIALIDAD,
                    FECHA: FECHA,
                    HORA: HORA

                },
                success: function(response){
                    alert('Cita agregada correctamente');
                    document.getElementById('modalAgregar').style.display = 'none';
                    cargarUsuarios();
                }
            });
        }

        function mostrarEditarUsuario(CITA_ID, ESPECIALIDAD, FECHA, HORA) {
            document.getElementById('editCITA_ID').value = CITA_ID;
            document.getElementById('editESPECIALIDAD').value = ESPECIALIDAD;
            document.getElementById('editFECHA').value = FECHA;
            document.getElementById('editHORA').value = HORA;
            document.getElementById('modalEditar').style.display = 'block';
        }

        function guardarEdicion() {
            var CITA_ID = document.getElementById('editCITA_ID').value;
            var ESPECIALIDAD = document.getElementById('editESPECIALIDAD').value;
            var FECHA = document.getElementById('editFECHA').value;
            var HORA = document.getElementById('editHORA').value;


            $.ajax({
                type: 'POST',
                url: 'guardar_edicion.php',
                data: {
                    CITA_ID: CITA_ID,
                    ESPECIALIDAD: ESPECIALIDAD,
                    FECHA: FECHA,
                    HORA: HORA,
                    
                },
                success: function(response){
                    alert('Cita editada correctamente');
                    document.getElementById('modalEditar').style.display = 'none';
                    cargarUsuarios();
                }
            });
        }

        $(document).on('click', '.delete-btn', function() {
            var CITA_ID = $(this).closest('tr').find('td:first').text();
            eliminarUsuario(CITA_ID);
        });

        function eliminarUsuario(CITA_ID) {
            $.ajax({
                type: 'POST',
                url: 'eliminar_usuario.php',
                data: {
                    CITA_ID: CITA_ID
                },
                success: function(response){
                    alert('Usuario eliminado correctamente');
                    cargarUsuarios();
                },
                error: function(xhr, status, error) {
                    alert('Error al eliminar usuario');
                },
                complete: function() {
                    $(this).prop('disabled', true); // Desactiva el botón después de hacer clic
                }
            });
        }

        function cerrarModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }
    </script>

</body>
</html>

