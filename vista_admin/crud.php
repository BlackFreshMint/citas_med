<?php session_start();
if (!isset($_SESSION['username'])) {
    header("index1.php");
    exit();
} ?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"> </script>
    <link rel="stylesheet" href="crud.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap" rel="stylesheet">

    <title>Document</title>
    
</head>
<body>
     <table id="prueba" border="1">
        <thead>
            <tr>
                <td>Curp</td>
                <td>Nombre</td>
                <td>Apellido</td>
                <td>Correo</td>
                <td>Telefono</td>
                <td>Direccion</td>
                <td>Unidad_Medica</td>
                <td>Editar_eliminar</td>

            </tr>
        </thead>
        <tbody>

        </tbody>
     </table>
     <button type="button" onclick="abrirModalAgregar()">Agregar Usuario</button>

    <div id="modalAgregar" style="display:none;">
        <h3>Agregar Usuario</h3>
        <form id="formAgregarUsuario">
                Curp: <input type="" id="addCurp"> <br>
                Nombre <input type="text" id= "addNombre" > <br>
                Apellido: <input type="text" id= "addApellido" > <br>
                Correo: <input type="text" id= "addCorreo" > <br>
                Telefono: <input type="text" id= "addTelefono" > <br> 
                Direccion: <input type="text" id= "addDireccion" > <br>
                Unidad_Medica: <input type="text" id= "addUnidad_medica" > <br> <br>
            <button type="button" onclick="guardarNuevoUsuario()">Guardar</button>
            <button type="button" onclick="cerrarModal('modalAgregar')" style="background-color: red;">Cancelar</button>
            
        </form>
    </div>
     <script>
        $(document).ready(function(){
            $.ajax({
                url: 'cargar_usuarioS.php',
                type: 'GET',
                success: function(response){
                    $('#prueba tbody').html(response);
                }
            });
        });
     </script>
     <div id = "modal_editar" style = "display: none;">
        <h3> Editar Usuario </h3> 
                Curp: <span id="editCurp"> </span> <br>
                Nombre: <input type="text" id= "editnombre" > <br>
                Apellido: <input type="text" id= "editApellido" > <br>
                Correo: <input type="text" id= "editCorreo" > <br>
                Telefono: <input type="text" id= "editTelefono" > <br> 
                Direccion: <input type="text" id= "editDireccion" > <br>
                Unidad_Medica: <input type="text" id= "editUnidad_medica" > <br> <br>
                <button type="button" onclick="guardarEdicion()"> Guardar</button>
            </form>
    </div>
    <script>
            function mostrarEditarUsuario( Curp, Nombre, Apellido, Correo, Telefono, Direccion, Unidad_medica) {
                document.getElementById('editCurp').innerText = Curp;
                document.getElementById('editnombre').value = Nombre;
                document.getElementById('editApellido').value = Apellido;
                document.getElementById('editCorreo').value = Correo;
                document.getElementById('editTelefono').value = Telefono;
                document.getElementById('editDireccion').value = Direccion;
                document.getElementById('editUnidad_medica').value = Unidad_medica;  
                document.getElementById('modal_editar').style.display ='block';
            }
            function guardarEdicion() {
                var Curp = document.getElementById('editCurp').innerText;
                var Nombre = document.getElementById('editnombre').value;
                var Apellido = document.getElementById('editApellido').value;
                var Correo = document.getElementById('editCorreo').value;
                var Telefono = document.getElementById('editTelefono').value;
                var Direccion = document.getElementById('editDireccion').value;
                var Unidad_medica = document.getElementById('editUnidad_medica').value;
                $.ajax({
                    type: 'POST',
                    url: 'guardar_edicion.php',
                    data:{
                        Curp,
                        Nombre,
                        Apellido,
                        Correo,
                        Telefono,
                        Direccion,
                        Unidad_medica
                    },
                    success: function(response){
                        alert('Usuario editado correctamente');
                        document.getElementById('modal_editar').style.display ='none';
                        actualizarUsuario();
                    }
                    

                }); 
            };
            function eliminarUsuario(Curp) {
            if (confirm("¿Estás seguro de que deseas eliminar este usuario?")) {
                $.ajax({
                    type: 'POST',
                    url: 'eliminar_usuarios.php',
                    data: {
                        Curp: Curp
                    },
                    success: function (response) {
                        alert(response); 
                        actualizarUsuario();
                    },
                    error: function (xhr, status, error) {
                        console.error(xhr.responseText);
                        alert("Error al intentar eliminar el usuario.");
                    }
                });
            }
        }
        function mostrarCitas(Curp) {

            $.ajax({
                type: 'GET',
                url: 'citas_paciente.php',
                data: { Curp: Curp },
                success: function(response){

                    abrirModalCitas(response);
                },

                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                    alert("Error al cargar la información de citas.");
                }
            });
        } 

        function cerrarModalCitas() {
            location.reload();
        }

        function abrirModalCitas(citasInfo) {

            var modalDiv = document.createElement('div');
            modalDiv.innerHTML = citasInfo;
            modalDiv.style.display = 'block';
            modalDiv.style.position = 'fixed';
            modalDiv.style.top = '50%';
            modalDiv.style.left = '50%';
            modalDiv.style.transform = 'translate(-50%, -50%)';
            modalDiv.style.padding = '20px';
            modalDiv.style.backgroundColor = '#FFE0F0';
            modalDiv.style.border = '1px solid #ff0000';
            modalDiv.style.boxShadow = '0 4px 8px rgba(0, 0, 0, 0.1)';
            modalDiv.style.borderRadius = '10px';

            modalDiv.innerHTML += '<button onclick="cerrarModalCitas()">Cerrar</button>';

            document.body.appendChild(modalDiv);
        }

            function actualizarUsuario(){
                $.ajax({
                    url:'cargar_usuarios.php',
                    type: 'GET',
                    success: function(response){
                        $('#prueba tbody').html(response);
                    }
                }

                )
            }

        function abrirModalAgregar() {
            document.getElementById('modalAgregar').style.display = 'block';
        }
        function cerrarModal(modalId) {
            document.getElementById(modalId).style.display = 'none';
        }

        function guardarNuevoUsuario() {
                var Curp = document.getElementById('addCurp').value;
                var Nombre = document.getElementById('addNombre').value;
                var Apellido = document.getElementById('addApellido').value;
                var Correo = document.getElementById('addCorreo').value;
                var Telefono = document.getElementById('addTelefono').value;
                var Direccion = document.getElementById('addDireccion').value;
                var Unidad_Medica = document.getElementById('addUnidad_medica').value;

            $.ajax({
                type: 'POST',
                    url: 'agregar_usuario.php',
                    data:{
                        Curp: Curp,
                        Nombre: Nombre,
                        Apellido: Apellido,
                        Correo: Correo,
                        Telefono: Telefono,
                        Direccion: Direccion,
                        Unidad_Medica: Unidad_Medica
                },
                success: function(response){
                    alert('Usuario agregado correctamente');
                    document.getElementById('modalAgregar').style.display = 'none';
                    actualizarUsuario();
                }
            });
        }
    </script>
</body>
</html>