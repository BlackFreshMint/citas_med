<?php session_start();
if (!isset($_SESSION['username'])) {
    header("location:../index.php");
    exit();
} ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/especialistas.css">
    <title>Especialistas</title>
</head>
<body class=" background-image: url(res/img/fondo.jpg);">

    <div>
        <!--<?php include 'vistas/nav3.php'?>-->
    </div>

    <div class="container">

        <!--Columna del lado izquierdo-->
        <div class="column-left">

        <!--Boton anestesiologia-->
        <a href="calendario.php" target="_blank" >
            <figure class="anestesiologia">
                <h1 class="title-anestesiologia">
                    Anestesiología
                </h1>
            </figure>
            <div class="foto-anestesiologia">
                <img src="res\img\anestesiologia.jpg" alt="Anestesiología" width="225" height="132">
            </div>
            <p class="text-anestesiologia">
                Anestesia general
            </p>
        </a>

            <!--Boton endocrinologia-->
        <a href="calendario.php" target="_blank">
            <figure class="endocrinologia">
                <h1 class="title-endocrinologia">
                    Endocrinología
                </h1>
            </figure>
            <div class="foto-endocrinologia">
                <img src="res\img\endocrinologia.jpg" alt="Endocrinología" width="225" height="132">
            </div>
            <p class="text-endocrinologia">
                Trastornos metabólicos <br> y hormonales
            </p>
        </a>

            <!--Boton hematologia-->
        <a href="calendario.php" target="_blank" >
            <figure class="hematologia">
                <h1 class="title-hematologia">
                    Hematología
                </h1>
            </figure>
            <div class="foto-hematologia">
                <img src="res\img\hematologia.jpg" alt="Hematología" width="225" height="132">
            </div>
            <p class="text-hematologia">
                Trastornos por sangre
            </p>
        </a>

            <!--Boton nefrologia-->
        <a href="calendario.php" target="_blank" >
            <figure class="nefrologia">
                <h1 class="title-nefrologia">
                    Nefrología
                </h1>
            </figure>
            <div class="foto-nefrologia">
                <img src="res\img\nefrologia.jpg" alt="Nefrología" width="225" height="132">
            </div>
            <p class="text-nefrologia">
                Trastornos renales
            </p>
        </a>

            <!--Boton oncologia
            <figure class="oncologia">
                <h1 class="title-oncologia">
                    Oncología
                </h1>
            </figure>
            <div class="foto-oncologia">
                <img src="res\img\oncologia.jpg" alt="Oncología" width="225" height="132">
            </div>
            <p class="text-oncologia">
                Anestesia general
            </p>-->

            <!--Boton otorrinolaringologia
            <figure class="otorrinolaringologia">
                <h1 class="title-otorrinolaringologia">
                    Otorrinolaringología
                </h1>
            </figure>
            <div class="foto-otorrinolaringologia">
                <img src="res\img\otorrinolaringologia.jpg" alt="Otorrinolaringología" width="225" height="132">
            </div>
            <p class="text-otorrinolaringologia">
                Anestesia general
            </p>-->

        </div>

        <!--Columna del centro-->
        <div class="column-center">

            <!--Boton cardiologia-->
        <a href="calendario.php" target="_blank" >
            <figure class="cardiologia">
                <h1 class="title-cardiologia">
                    Cardiología
                </h1>
            </figure>
            <div class="foto-cardiologia">
                <img src="res\img\cardiolodia.jpg" alt="Cardiología" width="225" height="132">
            </div>
            <p class="text-cardiologia">
                Trastornos del corazón
            </p>
        </a>

            <!--Boton gastroenterologia-->
        <a href="calendario.php" target="_blank" >
            <figure class="gastroenterologia">
                <h1 class="title-gastroenterologia">
                    Gastroenterología
                </h1>
            </figure>
            <div class="foto-gastroenterologia">
                <img src="res\img\gastroenterologia.jpg" alt="Gastroenterología" width="225" height="132">
            </div>
            <p class="text-gastroenterologia">
                Trastornos al aparato <br> digestivo
            </p>
        </a>

            <!--Boton inmunologia-->
        <a href="calendario.php" target="_blank" >
            <figure class="inmunologia">
                <h1 class="title-inmunologia">
                    Inmunología
                </h1>
            </figure>
            <div class="foto-inmunologia">
                <img src="res\img\inmunologia.jpg" alt="Inmunología" width="225" height="132">
            </div>
            <p class="text-inmunologia">
                Trastornos al sistema <br> inmunitario
            </p>
        </a>

            <!--Boton neurologia-->
        <a href="calendario.php" target="_blank" >
            <figure class="neurologia">
                <h1 class="title-neurologia">
                    Neurología
                </h1>
            </figure>
            <div class="foto-neurologia">
                <img src="res\img\neurologia.jpg" alt="Neurología" width="225" height="132">
            </div>
            <p class="text-neurologia">
                Trastornos al sistema <br>
                nervioso
            </p>
        </a>

            <!--Boton Oftalmología
            <figure class="oftalmologia">
                <h1 class="title-oftalmologia">
                    Oftalmología
                </h1>
            </figure>
            <div class="foto-oftalmologia">
                <img src="res\img\oftalmologia.jpg" alt="Oftalmología" width="225" height="132">
            </div>
            <p class="text-oftalmologia">
                Anestesia general
            </p>-->

            <!--Boton psiquiatria
            <figure class="psiquiatria">
                <h1 class="title-psiquiatria">
                    Psiquiatría
                </h1>
            </figure>
            <div class="foto-psiquiatria">
                <img src="res\img\psioterapia.jpg" alt="Psiquiatría" width="225" height="132">
            </div>
            <p class="text-psiquiatria">
                Anestesia general
            </p>-->

        </div>

        <!--Columna del lado derecho-->
        <div class="column-right">

            <!--Boton dermatologia-->
        <a href="calendario.php" target="_blank" >
            <figure class="dermatologia">
                <h1 class="title-dermatologia">
                    Dermatología
                </h1>
            </figure>
            <div class="foto-dermatologia">
                <img src="res\img\dermatologia.jpg" alt="Dermatologia" width="225" height="132">
            </div>
            <p class="text-dermatologia">
                Trastornos de la piel
            </p>
        </a>

            <!--Boton cirugia general-->
        <a href="calendario.php" target="_blank" >
            <figure class="cirugia-general">
                <h1 class="title-cirugia">
                    Cirugía general
                </h1>
            </figure>
            <div class="foto-cirugia">
                <img src="res\img\cirugia.jpg" alt="Cirugía general" width="225" height="132">
            </div>
            <p class="text-cirugia">
                Cirugías a cualquier <br> parte del cuerpo
            </p>
        </a>

            <!--Boton infecciones-->
        <a href="calendario.php" target="_blank" >
            <figure class="infecciones">
                <h1 class="title-infecciones">
                    Infecciones
                </h1>
            </figure>
            <div class="foto-infecciones">
                <img src="res\img\infecciones.jpg" alt="Infecciones" width="225" height="132">
            </div>
            <p class="text-infecciones">
                Infecciones en el sistema <br> del organismo
            </p>
        </a>

            <!--Boton ginecologia-->
        <a href="calendario.php" target="_blank" >
            <figure class="ginecologia">
                <h1 class="title-ginecologia">
                    Ginecología
                </h1>
            </figure>
            <div class="foto-ginecologia">
                <img src="res\img\ginecologia.jpg" alt="Ginecología" width="225" height="132">
            </div>
            <p class="text-ginecologia">
                Aparato reproductor <br>
                de las mujeres
            </p>
        </a>

            <!--Boton ortopedia
            <figure class="ortopedia">
                <h1 class="title-ortopedia">
                    Ortopedia
                </h1>
            </figure>
            <div class="foto-ortopedia">
                <img src="res\img\ortopedia.jpg" alt="Ortopedia" width="225" height="132">
            </div>
            <p class="text-ortopedia">
                Anestesia general
            </p>-->

            <!--Boton fisioterapia
            <figure class="fisioterapia">
                <h1 class="title-fisioterapia">
                    Fisioterapia
                </h1>
            </figure>
            <div class="foto-fisioterapia">
                <img src="res\img\fisioterapia.jpg" alt="Fisioterapia" width="225" height="132">
            </div>
            <p class="text-fisioterapia">
                Anestesia general
            </p>-->

        </div>


    </div>
    <!--<?php include 'vistas/footer.php'?>-->
</body>
</html>

