<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CIMEC</title>
    <link rel="icon" type="type/x-icon" href="../res/svg/cimec_logo.svg">
    <link rel="stylesheet" href="../css/fonts.css">
    <link rel="stylesheet" href="../css/styles.css">
</head>
<body>

<?php include 'nav3.php'?>

<main>
    <section style="display: flex; flex-direction: column; text-align: center; margin-bottom: 3%;">

        <article>

            <h1 class="r_title" style="margin-bottom:3%;">¿Quienes Somos?</h1>

            <p class="m_sub_s" style="width: 60%; text-align: center; margin: auto;"><strong>Equipo de trabajo medico enfocado en su bienestar<br> con una de las mejores tecnologias y especialistas <br>para brindarle una vida saludable.</strong></p>

            <img src="../res/svg/stock_2.svg" style="width: 90%; margin-top: 3%;">

            <h1 class="r_title" style="margin-bottom:2%; margin-top: 3%;">Metas</h1>

            <p class="m_sb" style="width: 80%; text-align: center; margin: auto;">Esto lo lograremos con esfuerzo y con dedicacion,<br> tambien gracias a tu ayuda esto puede ser realidad.</p>

            <div class="grid_5c" style="justify-items: center; margin-top: 4%;margin-left: 3%;">
                <p></p>
                <div  class="img_box" style="background-image:url(../res/svg/heart.svg); width: calc(15vw);"></div>
                <div  class="img_box" style="background-image:url(../res/svg/happy_face.svg); width: calc(15vw);"></div>
                <div  class="img_box" style="background-image:url(../res/svg/circle_up.svg); width: calc(15vw);"></div>
                <p></p>

            </div>

            <div class="grid_5c" style="margin-top: -2%;">
                <p></p>
                <h1 class="h1_na">Bienestar</h1>
                <h1 class="h1_na">Satisfaccion</h1>
                <h1 class="h1_na">Mejora</h1>
                <p></p>
            </div>

            <div class="grid_5c" style="margin-top: .5%;">
                <p></p>
                <p>Conseguir el bienestar<br> de todos nuestros pacientes.</p>
                <p>Que todos nuestos clientes<br> se sientan satisfechos.</p>
                <p>Seguir mejorando para<br> proveer el mejor servicio.</p>
                <p></p>
            </div>

            <h1 class="r_title" style=" margin-top: 8%; ">Valores</h1>

            <div class="grid_5c" style="justify-items: center; margin-bottom: 3%; margin-top: 5%;
            align-items: center;">

                <p></p>
                <p class="text_box"><strong>Responsabilidad.</strong><br> Este valor nos hace hacer las cosas con la moyor calidad posible, para poder conseguir la satisfaccion de nuestro cliente.</p>
                <img class="img_az" src="../res/svg/hand_sparks.svg">
                <p class="text_box"><strong>Flexibilidad.</strong><br> Sabemos que hay situaciones dificiles, por eso somos flexibles con nuestros clientes intentando entender la situacion actual del mismo.</p>

                <p></p>
            </div>

            <div class="grid_5c" style="justify-items: center; margin-bottom: 5%;
            align-items: center;">

                <p></p>
                <img class="img_az" src="../res/svg/handshake.svg">
                <p class="text_box"><strong>Trasparencia.</strong><br> La confianza se forja con la honestidad, nosotros somos lo mas transparente con nuestros clientes, ya que queremos formar esa confianza en las personas.</p>
                <img class="img_az" src="../res/svg/people_group.svg">
                <p></p>

            </div>

        </article>

    </section>

    <section style="display :flex; justify-content: center;margin-top: 15%;margin-bottom: 6%;">

        <article class="contact_us" style="width: 60%; height: auto;">

            <h1 style="margin-left: 4%;font-size: calc(1rem + 2vw); margin-top: 6%; margin-bottom: 5%">Contactanos</h1>

            <div>
                <form action="" style="margin-top: 4%; margin-bottom: 2%;">
                    <div style="display: flex; flex-direction: column;">
                        <div style="display: flex; flex-direction: column;">
                            <label for="" class="m_sb" style="margin-left: 4%;">Nombre Completo*</label>
                            <input id="full_name_con" class="input_r" style="width: 92.5%; margin-left: 3%; padding-bottom:4% ;margin-bottom: 2%;" type="text" placeholder="Nombre(s)" required>
                            <label for="" class="m_sb" style="margin-left: 4%;">Correo Electronico*</label>
                            <input id="email_con" class="input_r" style="width: 92.5%; margin-left: 3%; padding-bottom:4% ; margin-bottom:3%;" type="email" placeholder="Correo" required>
                        </div>
                        <div style="display: flex; justify-content: left; flex-direction: column;">
                            <div>
                                <label for="" class="m_sb" style="margin-left: 4%;">Escribe tu Mensaje</label>
                                <textarea id="message" class="txa_p" style="margin-left: 3%; width: 92.5%;height: 40%; border-radius: 15px;padding-top: 12%;font-family: 'MontserratM';border: 0;margin-top: 2%; text-align: center;" name="Mensaje" id="" cols="92" rows="8" placeholder=" Escribe aqui" required></textarea>
                            <div>
                        </div>
                    </div>
                    &nbsp;
                </form>
                <div style="text-align: center; margin-top: 2%;">
                    <input type="submit" value="Enviar" class="button_r" style="margin-bottom: 5%; text-align: center;text-indent: -3px;"></input>
                </div>
            </div>

        </article>

    </section>

</main>

    <?php include 'footer.php'?>

</body>

</html>
