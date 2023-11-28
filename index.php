<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Main Page</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/fonts.css">
    <link rel="stylesheet" href="css/slider.css">
</head>

<body>
    <?php include "header.php"?>
    <main>
    <div class="container">
        <h1 id="w_title">Bienvenido a CIMEC</h1>
        <p id="welcome_tx">Uno de los mejores servicios medicos a su disposicion. Conozca un poco mas de nosotros.</p>
        <button id="more">MAS</button>
        <img src="res/svg/test_img.svg" id="test_img1" alt="">
    </div>

    <div class="mid_container">
        <h2 id="subtitle">Agenda con nosotros</h2>
        <!-- For mobile Only -->
        <div id="card_slider">
            <?php include "slider_cards.php"?>
        </div>
        <!-- desktop view -->
        <div id="card_container">
            <div class="card" id="c1"></div>
            <div class="card" id="c2"></div>
            <div class="card" id="c3"></div>
        </div>
    </div>

    <div class="end_container">
        <h1 id="med_title">Acerca de Medicina</h1>
        <p class="normal_text">"En el corazon de la salud, reservamos tu bienestar"</p>
        <hr id="line">

        <div class="internal_container" id="itc1">
            <div class="title_block">¿Medicina?</div>
            <div class="title_block" id="toggle">Metas</div>
            <div class="title_block" id="toggle2">Valores</div>
        </div>

        <div class="internal_container" id="text_col">
            <p class="normal_text" id="txt_col">La medicina es el arte de sanar, la ciencia de cuidar, y el motor de la vida. Encuentra inspiración en la búsqueda constante de un cuerpo y mente saludables.</p>
            <div class="title_block" id="toggle3">Metas</div>

            <div id="text_col2">
                <ol class="normal_text" id="txt_col">
                    <li>Curar</li>
                    <li>Prevenir</li>
                    <li>Investigar</li>
                    <li>Sanar</li>
                    <li>Cuidar</li>
                    <li>Aliviar</li>
                    <li>Innovar</li>
                </ol>
            </div>

            <div class="title_block" id="toggle4">Valores</div>

            <div id="text_col2">

                <ol class="normal_text" id="txt_col">
                    <li>Compasion</li>
                    <li>Etica</li>
                    <li>Empatia</li>
                    <li>Integridad</li>
                    <li>Paciencia</li>
                    <li>Responsabilidad</li>
                </ol>
            </div>

        </div>

        <h1 id="med_title">Nuestros servicios</h1>

        <hr>

        <div class="internal_container" id="text_col2">

            <ol class="normal_text" id="txt_col">
                <li>Consultas médicas de calidad.</li>
                <li>Diagnóstico preciso y tratamientos efectivos.</li>
                <li>Atención integral centrada en tu bienestar.</li>
                <li>Programas de prevención y promoción de la salud.</li>
            </ol>

            <ol class="normal_text" id="txt_col">
                <li>Curar</li>
                <li>Prevenir</li>
                <li>Investigar</li>
                <li>Sanar</li>
                <li>Cuidar</li>
                <li>Aliviar</li>
                <li>Innovar</li>
            </ol>

        </div>

        <div class="img_container2"></div>
    </div>

    </main>

    <?php include "footer.php"?>

</body>
</html>
