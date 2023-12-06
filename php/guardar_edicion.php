<?php
    $servidor="localhost";
    $usuario="root";
    $password="";
    $base="cimec2";
    $cone= new mysqli($servidor,$usuario,$password,$base);

    if(mysqli_connect_error()){
        die("Conexion fallida".$cone->connect_error);
    }
    $Cita_id= $_POST['Cita_id'];
    $Curp_paciente= $_POST['Curp_paciente'];
    $Especialidad_id= $_POST['Especialidad_id'];
    $Doctor_id=$_POST['Doctor_id'];
    $Dia=$_POST['Dia'];
    $Observaciones=$_POST['Observaciones'];


    $sqlupdate = "UPDATE citas SET
        Cita_id = '$Cita_id',
        Curp_paciente = '$Curp_paciente',
        Especialidad_id = '$Especialidad_id',
        Doctor_id = '$Doctor_id',
        Dia = '$Dia',
        Observaciones = '$Observaciones'
        
    
    WHERE Cita_id = '$Cita_id'";

    if($cone -> query ($sqlupdate)=== true){
            echo "Cita correctamente actualizada";
    }
        else{
            echo"Error al actualizar cita".$cone ->error;
        }
    
    $cone-> close();
?>
