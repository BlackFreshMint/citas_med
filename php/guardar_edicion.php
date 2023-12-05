<?php
    $servidor="localhost";
    $usuario="root";
    $password="";
    $base="cimec2";
    $cone= new mysqli($servidor,$usuario,$password,$base);

    if(mysqli_connect_error()){
        die("Conexion fallida".$cone->connect_error);
    }
    $CITA_ID= $_POST['CITA_ID'];
    $ESPECIALIDAD=$_POST['ESPECIALIDAD'];
    $FECHA=$_POST['FECHA'];
    $HORA=$_POST['HORA'];


    $sqlupdate = "UPDATE citas SET
        CITA_ID = '$CITA_ID',
        ESPECIALIDAD = '$ESPECIALIDAD',
        FECHA = '$FECHA',
        HORA = '$HORA'
        
    
    WHERE CITA_ID = '$CITA_ID'";

    if($cone -> query ($sqlupdate)=== true){
            echo "Cita correctamente actualizada";
    }
        else{
            echo"Error al actualizar cita".$cone ->error;
        }
    
    $cone-> close();
?>
