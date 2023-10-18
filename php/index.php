<?php

$name = "Ben" ;
$lastn = "Zarate";
$birth = 2004;
$edo_act = 2023;

//condiciones
$l_age = 18;

//op mat

$edad = $edo_act - $birth;
echo "Soy"." ".$name."<br>"."me apellido"." ".$lastn."<br>"."mi edad es de $edad años"."me gustan los tamales de rojo"."<br>";

//if

if ($edad > $l_age) {
    echo "Legal, tienes $edad";
} else {
    echo "no legal, tienes  $edad";
}


?>
