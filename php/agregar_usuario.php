<?php
    $servidor="localhost";
    $usuario="root";
    $password="";
    $base="cimec2";
    $cone= new mysqli($servidor,$usuario,$password,$base);

    if($cone->connect_error){
        die("ConexionExitosa".$cone->connect_error);
    }

    // Verificar si se envió información para agregar un usuario
    if ($_SERVER["REQUEST_METHOD"] == "POST" &&  ($_POST['CITA_ID']) && isset($_POST['ESPECIALIDAD']) && isset($_POST['FECHA']) && isset($_POST['HORA'])) {
        
        // Obtener los datos del formulario
        $CITA_ID = $_POST['CITA_ID']; // Cambiar $id_rol por $rol
        $ESPECIALIDAD = $_POST['ESPECIALIDAD'];
        $FECHA = $_POST['FECHA'];
        $HORA = $_POST['HORA'];

        // Preparar la consulta para insertar un nuevo usuario
        $sql = "INSERT INTO citas (CITA_ID, ESPECIALIDAD, FECHA, HORA) VALUES ('$CITA_ID', '$ESPECIALIDAD', '$FECHA', '$HORA')";

        if (mysqli_query($cone, $sql)) {
            echo "Usuario agregado correctamente";
        } else {
            echo "Error al agregar el usuario: " . mysqli_error($cone);
        }
    }
?>
