<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registrate</title>
    <link rel="stylesheet" href="registro1.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fredoka:wght@600&display=swap" rel="stylesheet">
</head>
<body>
    <figure class="container">

        <div class="information">
            <h1 class="title">REGISTRO AL SERVICIO MEDICO</h1>

            <p class="paragraph">
                Bienvenido al sitema de registro de nuestro servicio medico, este
                proceso le ayudara a usted a recibir un tratamiento en condiciones
                gracias a nuestros grandes doctores. Recuerde de verificar que sus
                datos sean correctos antes de enviar su informacion, estos datos 
                seran utilizados en los proximas citas que usted puede agendar. 
            </p>

            <form class="form">

                <div class="form_container">

                    <div class="form_grupo">
                        <input class="form_input" type="text" id="nombre" placeholder=" ">
                        <label for="nombre" class="form_label">Nombre</label>
                    </div>

                    <div class="form_grupo">
                        <input class="form_input" type="text" id="apellido" maxlength="30" placeholder=" ">
                        <label for="apellido" class="form_label">Apellido</label><br/>
                    </div>

                    <div class="form_grupo">
                        <input class="form_input" id="curp" type="text" maxlength="18" placeholder=" ">
                        <label for="curp" class="form_label">CURP</label>
                    </div>

                    <div class="form_grupo">
                        <input class="form_input" id="fecha" type="text" placeholder=" ">
                        <label for="fecha" class="form_label">Fecha de nacimiento</label><br>
                    </div>

                    <div class="form_grupo">
                        <input class="form_input" id="telefono" type="text" maxlength="10" placeholder=" ">
                        <label for="telefono" class="form_label">Teléfono celular</label>
                    </div>

                    <div class="form_grupo">
                        <input class="form_input" id="correo" type="email" placeholder=" ">
                        <label for="correo" class="form_label">Correo electronico</label><br>
                    </div>

                    <div class="form_grupo">
                        <input class="form_input" id="direccion" type="text" placeholder=" ">
                        <label for="direccion" class="form_label">Dirección</label><br>
                    </div>

                    <div class="form_grupo">
                        <input class="form_input" id="clinica" type="text" placeholder=" ">
                        <label for="clinica" class="form_label">Clínica</label><br>
                    </div>

                    <!--<input type="submit" class="form_submit" value="Registrarme" >!-->
                    <a href="confirmacion.html"><button class="form_submit"  type="button" onclick="guardarNuevoUsuario()">Guardar</button></a>

                </div>

            </form>
        
        </div>

        <!--<div class="div2">
            <img class="img" src="Consultorio.jpg" alt="Consultorio" width="300px" height="345px">
        </div>!-->

    </figure>

</body>
</html>
