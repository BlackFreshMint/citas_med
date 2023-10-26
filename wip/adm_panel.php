<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Panel de Administracion</title>
    <link rel="stylesheet" href="css/adm_panel.css">
    <link rel="stylesheet" href="css/fonts.css">
</head>
<body>

<?php include 'nav3.php'?>

<main>
    <div style="text-align: center;">

        <label for=""><img src="res/svg/search_ico2.svg" style="width: 2%; height: 2%; fill: black;"></label>
        <input class="bar" type="search" placeholder="Buscar..." style="border: 0; border-bottom: 1px solid black; width: 40%;">
        <label for=""><img src="res/svg/filter-solid.svg" style="width: 2%;"></label>

        <select class="bar" name="" id="filters" style="border: 0;">

            <option value="NULL">Filtros</option>

            <optgroup label="Rangos de Edad">
                <option value="filter_a1">0-18</option>
                <option value="filter_a2">18-60</option>
                <option value="filter_a3">60+</option>
            </optgroup>

            <optgroup label="Sexo">
                <option value="filter_g1">Hombre</option>
                <option value="filter_g2">Mujer</option>
            </optgroup>

        </select>
    </div>
    <hr>
    <div style="height: 1%; width: 100%;">
        <div class="grid_6c" style="height: 20px; width: 100%;margin-top: -1%; grid-template-columns: 12% 21% 21% 27% 21% 6%;">
            <p></p>
            <p class="fz">#ID</p>
            <p class="fz">NOMBRE DEL PACIENTE</p>
            <p class="fz">ACTIVIDAD RECIENTE</p>
            <p class="fz">M INFORMACION(BOTON)</p>
            <p></p>
        </div>
    </div>

    <hr>
        </div>
            <div style="align-content: center;">

                <div class="grid_6c" style="width: 100%; text-align: center;">
                    <p></p>
                    <p class="patient_inf">ID_PACIENTE</p>
                    <p class="patient_inf">NOMBRE1 NOMBRE2 APELLIDO1 APELLIDO2</p>
                    <p class="patient_inf">ACTIVIDAD RECIENTE</p>
                    <input class="bto" style="margin: auto; border: 0;" type="button" value="BOTON" src="#">
                    <p></p>
                </div>

            </div>


        </div>
    <hr>

</main>

    <?php include 'footer.php'?>

</body>
</html>
