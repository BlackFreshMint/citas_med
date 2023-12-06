<?php include "views/navbar.php" ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <script src="js/functions.js"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/register.css">
    <link rel="stylesheet" href="css/navbar.css">
    <link rel="stylesheet" href="css/footer.css">
    <title>Documento</title>
</head>

<body>

<section id="form_container">
    <div class="container text-center">
        <div class="row">
            <div class="col-8" id="bg_first_side">

    <!-- Text Blocks Should be put inside this two columns -->

                <div class="row">
                    <div class="col" id="Title_form">REGISTRO AL SERVICIO MEDICO</div>
                </div>

                <div class="row">
                    <div class="col" id="text_body">Bienvenido al sitema de registro de nuestro servicio medico, este
proceso le ayudara a usted a recibir un tratamiento en condiciones
gracias a nuestros grandes doctores. Recuerde de verificar que sus
datos sean correctos antes de enviar su informacion, estos datos
seran utilizados en los proximas citas que usted puede agendar.</div>
                </div>

                <div class="row">
                    <div class="col" >
                        <hr style="border:2px solid black;opacity:100;margin-bottom:50px;">
                        <form>
                            <div class="row" id="separator">
                                <div class="col">
                                    <label class="label_title" for="">Nombre(s)<span class="red">*</span></label><br>
                                    <input type="text" id="addNOMBRE" class="gen_input" name="Nombre" required>
                                </div>

                                <div class="col">
                                    <label class="label_title" for="">Apellidos<span class="red">*</span></label><br>
                                    <input type="text" id="addAPELLIDO" class="gen_input"  name="Apellido" required>
                                </div>
                            </div>

                            <div class="row" id="separator">
                                <div class="col">
                                <label class="curp_title" for="">CURP<span class="red">*</span></label><br>
                                    <input type="text" id="addCURP" class="gen_input3"  name="Curp" required>
                                </div>
                            </div>


                            <div class="row" id="separator">
                                <div class="col">

                                    <label class="phone_title" for="">Telefono Movil<span class="red">*</span></label><br>
                                    <input type="text" id="addTELEFONO" name="Telefono" class="gen_input" required>
                                </div>

                                <div class="col">

                                    <label class="email_title" for="">Correo Electronico<span class="red"></span></label><br>
                                    <input type="text" id="addCORREO" class="gen_input" name="Correo" required>
                                </div>
                            </div>
                            <div class="row" id="separator">
                                <div class="col">
                                    <label class="dir_title" for="">Direccion</label><br>
                                        <input type="text" id="addDIRECCION" name="Direccion" class="gen_input2">
                                </div>
                            </div>

                            <div class="row">
                                <div class="col">
                                    <label class="clinic_title" for="">Clinica de Atencion</label><br>
                                    <input type="text" id="addUMED" name="Unidad_Medica" class="gen_input2">
                                </div>
                            </div>
                            <div class="row justify-content-center">
                                <div class="col">
                                    <button class="submit_button" type="button" onclick="CreateUser()">Registrarme</button>
                                </div>
                            </div>

                        </form>
                    </div>
                </div>

            </div>
            <div class="col-4" id="bg_second_side">
                <img src="res/img/res_image_1.png" class="img-fluid" alt="">
            </div>
        </div>
    </div>
</section>

</body>
</html>

<?php include "views/footer.php" ?>
