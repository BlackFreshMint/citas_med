

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
                <td>Cita_id</td>
                <td>Curp_paciente</td>
                <td>Especialidad_id</td>
                <td>Doctor_id</td>
                <td>Dia</td>
                <td>Observaciones</td>
                <td></td>
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
            Cita_id: <input type="text" id="addCita_id"><br>
            Curp_paciente: <input type="text" id="addCurp_paciente"><br>
            Especialidad_id: <input type="text" id="addEspecialidad_id"><br>
            Doctor_id: <input type="text" id="addDoctor_id"><br>
            Dia: <input type="text" id="addDia"><br>
            Observaciones: <input type="text" id="addObservaciones"><br><br>
            <button type="button" onclick="guardarNuevoUsuario()">Guardar cita</button>
            <button type="button" onclick="cerrarModal('modalAgregar')" style="background-color: red;">Cancelar</button>
        </form>
    </div>
    
    <div id="modalEditar" style="display:none;">
        <h3>Editar cita</h3>
        <form id="formEditarUsuario">
            Cita_id: <input type="text" id="editCita_id"><br>
            Curp_paciente: <input type="text" id="editCurp_paciente"><br>
            Especialidad_id: <input type="text" id="editEspecialidad_id"><br>
            Doctor_id: <input type="text" id="editDoctor_id"><br>
            Dia: <input type="text" id="editDia"><br>
            Observaciones: <input type="text" id="editObservaciones"><br><br>
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
                url: 'php/cargar_usuarios.php',
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
            var Cita_id = document.getElementById('addCita_id').value;
            var Curp_paciente = document.getElementById('addCurp_paciente').value;
            var Especialidad_id = document.getElementById('addEspecialidad_id').value;
            var Doctor_id = document.getElementById('addDoctor_id').value;
            var Dia = document.getElementById('addDia').value;
            var Observaciones = document.getElementById('addObservaciones').value;

            $.ajax({
                type: 'POST',
                url: 'php/agregar_usuario.php',
                data: {
                    Cita_id: Cita_id,
                    Curp_paciente: Curp_paciente,
                    Especialidad_id: Especialidad_id,
                    Doctor_id: Doctor_id,
                    Dia: Dia,
                    Observaciones: Observaciones,

                },
                success: function(response){
                    alert('Cita agregada correctamente');
                    document.getElementById('modalAgregar').style.display = 'none';
                    cargarUsuarios();
                }
            });
        }

        function mostrarEditarUsuario(Cita_id, Curp_paciente, Especialidad_id, Doctor_id, Dia, Observaciones) {
            document.getElementById('editCita_id').value = Cita_id;
            document.getElementById('editCurp_paciente').value = Curp_paciente;
            document.getElementById('editEspecialidad_id').value = Especialidad_id;
            document.getElementById('editDoctor_id').value = Doctor_id;
            document.getElementById('editDia').value = Dia;
            document.getElementById('editObservaciones').value = Observaciones;
            document.getElementById('modalEditar').style.display = 'block';
        }

        function guardarEdicion() {
            var Cita_id = document.getElementById('editCita_id').value;
            var Curp_paciente = document.getElementById('editCurp_paciente').value;
            var Especialidad_id = document.getElementById('editEspecialidad_id').value;
            var Doctor_id = document.getElementById('editDoctor_id').value;
            var Dia = document.getElementById('editDia').value;
            var Observaciones = document.getElementById('editObservaciones').value;


            $.ajax({
                type: 'POST',
                url: 'php/guardar_edicion.php',
                data: {
                    Cita_id: Cita_id,
                    Curp_paciente: Curp_paciente,
                    Especialidad_id: Especialidad_id,
                    Doctor_id: Doctor_id,
                    Dia: Dia,
                    Observaciones: Observaciones,
                    
                },
                success: function(response){
                    alert('Cita editada correctamente');
                    document.getElementById('modalEditar').style.display = 'none';
                    cargarUsuarios();
                }
            });
        }

        $(document).on('click', '.delete-btn', function() {
            var Cita_id = $(this).closest('tr').find('td:first').text();
            eliminarUsuario(Cita_id);
        });

        function eliminarUsuario(Cita_id) {
            $.ajax({
                type: 'POST',
                url: 'php/eliminar_usuario.php',
                data: {
                    Cita_id: Cita_id
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

