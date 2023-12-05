<?php
    $servidor="localhost";
    $usuario="root";
    $password="";
    $base="cimec2";
    $conn= new mysqli($servidor,$usuario,$password,$base);

    if(mysqli_connect_error()){
        die("Conexion fallida".$conn->connect_error);
    }
    $Curp=$_POST['Curp'];
    $Nombre= $_POST['Nombre'];
    $Apellido=$_POST['Apellido'];
    $Correo=$_POST['Correo'];
    $Telefono=$_POST['Telefono'];
    $Direccion=$_POST['Direccion'];
    $Unidad_medica=$_POST['Unidad_medica'];

    $sqlupdate =" UPDATE pacientes SET
     Curp = '$Curp',
     Nombre = '$Nombre',
     Apellido = '$Apellido',
     Correo = '$Correo',
     Telefono = '$Telefono',
     Direccion = '$Direccion',
     Unidad_medica = '$Unidad_medica' 
     WHERE Curp = '$Curp'";

    if($conn -> query ($sqlupdate)=== true){
            echo "Usuario correctamente actualizado";
    }
        else{
            echo"Error al actualizar usuario".$conn ->error;
        }
    

    $conn-> close();
?>

//Actualizar el usuario en la base de datos 
