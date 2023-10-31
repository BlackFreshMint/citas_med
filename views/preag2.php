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

    <section style="display: flex; flex-direction: row;">

        <aside style="display: grid; grid-template-columns: 100%; width: 50%;">

            <h1 id="titulo">La agenda online <br> para médicos más <br> completa</h1>

            <article style="margin-top: 6%;  margin-left: 21.5%; text-align: left;">

                <div style="display: grid; grid-template-columns: 100%;">

                    <div style="display: flex; flex-direction: column;">

                        <div style="display: flex; flex-direction: row;">
                            <img src="../res/svg/circle_check.svg" style="width: 6%; margin-top: -14%;">
                            <p class="m_sub" id="text" style="margin-left: 2%;">Cada vez más pacientes <em>en<br> México usan CIMEC para<br> seguimiento a sus citas</em></p>
                        </div>

                        <div style="display: flex; flex-direction: row;">
                            <img src="../res/svg/circle_check.svg" style="width: 6%; margin-top: -14%;">
                            <p class="m_sub" id="text" style="margin-left: 2%;"><em>+ 800K citas mensuales <br>agendadas en CIMEC en México</em></p>
                        </div>

                        <div style="display: flex; flex-direction: row;">
                            <img src="../res/svg/circle_check.svg" style="width: 6%; margin-top: -14%;">
                            <p class="m_sub" id="text" style="margin-left: 2%;">Gestión de agenda con <em>notificaciones automatizadas</em> y personalizables a sus pacientes.</p>
                        </div>

                        <div style="display: flex; flex-direction: row;">
                            <img src="../res/svg/circle_check.svg" style="width: 6%; margin-top: -14%;">
                            <p class="m_sub" id="text" style="margin-left: 2%;">Permita que lo agenden desde <br>redes sociales, su página web, enlaces personalizados y desde <br>la app y web de Doctoralia.</p>
                        </div>

                        <div style="display: flex; flex-direction: row;">
                            <img src="../res/svg/circle_check.svg" style="width: 6%; margin-top: -14%;">
                            <p class="m_sub" id="text" style="margin-left: 2%;">Posiciones más altas en los resultados de búsqueda de Doctoralia</p>
                        </div>

                        <p class="m_sb" id="text" style="margin-left: 8%; margin-top: 12%;">¿Le gustaría conocer los planes de contratación de CIMEC? Por favor<br> llene el formulario</p>

                    </div>

                <img src="../res/svg/stock_1.svg" id="stock" style="margin-left: 8%; width: 80%; height: 80%;">

            </article>

        </aside>

        <aside style="display: grid; grid-template-columns: 100%;">

            <section class="c" style="margin-top: 12%;">


                <h1 class="m_title" style="margin-top: 10%; margin-bottom: 4%;">Complete el formulario para ser contactado por un experto de CIMEC</h1>

            <article>

                <form style="display: grid; grid-template-columns: 100%;  width: 100%; margin-left: 10%; margin-bottom: 2%;">

                    <div style="display: grid; grid-template-columns: 40% 15%;">
                        <div>
                            <p class="m_title" id="form_sub" >Nombre*</p>
                        </div>
                        <div>
                            <p class="m_title" 10%id="form_sub" style=" position:relative; left: 33%;">Apellidos*</p>
                        </div>
                    </div>

                    <div style="display: flex; flex-direction: row; margin-bottom: 2%;">

                        <input id="full_name" class="input_r" type="text" id="" placeholder="Nombre(s)" required>
                        <input id="last_names" class="input_r" type="text" placeholder="Apellido(s) " style=" margin-left: 9.25%;" required>

                    </div>

                    <p class="m_title" id="form_sub" style="margin-bottom: -1%;">CURP*</p>
                    <input if="curp" class="input_rl" type="text" placseholder="Tu CURP" required>

                    <p class="m_title" id="form_sub" style="margin-bottom: -1%;">Correo*</p>
                    <input if="email" class="input_rl" type="email" placeholder="Tu.correo@gmail.com" required>

                    <p class="m_title" id="form_sub" style="margin-bottom: -1%;">Telefono*</p>
                    <input id="tel_num" class="input_rl" type="tel" placeholder="10 digitos (618 000 0000)" required>

                    <p class="m_title" id="form_sub" style="margin-bottom: -1%;">Domicilio*</p>
                    <input id="dir" class="input_rl" type="text" placeholder="Calle 123 #321, Colonia (tu direccion)" required>

                    <p class="m_title" id="form_sub" style="margin-bottom: -1%;">Unidad Medica*</p>
                    <input id="u_med" class="input_rl" type="text" placeholder="47 (tu unidad)" required>

                </form>

                <h1 class="m_title" id="form_sub" style="margin-bottom: 5%; margin-top: 2%;">Al enviar tus datos aceptas<br> recibir información de Doctoralia México a través de Whatsapp.</h1>

                <input type="submit" value="Enviar" class="button_r" style="margin-bottom: 5%; text-align: center;text-indent: -3px;"></input>

             </article>

            </section>

        </aside>

    </section>

    <section style="margin-bottom: 3%;">

        <article class="grid_1c">

            <p></p>
            <div style="text-align: center;">
                <div style="width: 80%; text-align: center; margin: 0 auto; margin-top: 1%;">

                    <p class="m_sb" id="ide" style="font-size: calc(1rem + 1.25vw);">¡Gestione su consultorio y la<br> comunicación con los pacientes!</p>

                    <P class="m_sub" style="font-size: x-large; text-align: center; margin: 0 auto;">Solicite más información y contacte con nuestros<br> asesores especializados.</P>

                    <button class="button_r" style="margin-top: 4%; background-color: #18AA52; padding-bottom: 3%; padding-top: 1.5%; width: 30%;text-indent: 2px;">Más<img src="../res/svg/arrow.svg" style="height: 20%; width: 20%; margin-left: 6%; margin-bottom: -5%; text-align: center;"></button>

                </div>
            </div>
            <p></p>

        </article>

    </section>

</main>

    <?php include 'footer.php'?>

</body>

</html>
