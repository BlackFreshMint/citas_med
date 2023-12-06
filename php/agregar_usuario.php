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
    if ($_SERVER["REQUEST_METHOD"] == "POST" &&  ($_POST['Cita_id']) && isset($_POST['Curp_paciente']) && isset($_POST['Especialidad_id']) && isset($_POST['Doctor_id']) && isset($_POST['Dia']) && isset($_POST['Observaciones'])) {
        
        // Obtener los datos del formulario
        $Cita_id = $_POST['Cita_id']; // Cambiar $id_rol por $rol
        $Curp_paciente = $_POST['Curp_paciente'];
        $Especialidad_id = $_POST['Especialidad_id'];
        $Doctor_id = $_POST['Doctor_id'];
        $Dia = $_POST['Dia'];
        $Observaciones = $_POST['Observaciones'];

        // Preparar la consulta para insertar un nuevo usuario
        $sql = "INSERT INTO citas (Cita_id, Curp_paciente, Especialidad_id, Doctor_id, Dia, Observaciones) VALUES ('$Cita_id', '$Curp_paciente', '$Especialidad_id', '$Doctor_id', '$Dia', '$Observaciones')";

        if (mysqli_query($cone, $sql)) {
            echo "Usuario agregado correctamente";
        } else {
            echo "Error al agregar el usuario: " . mysqli_error($cone);
        }
    }
?>
