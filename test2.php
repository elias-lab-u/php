<?php
    $meses = array("enero","febrero","marzo",
                    "abril","mayo","junio",
                    "julio","agosto","setiembre",
                    "octubre","novienbre","diciembre");


    $Fecha =date("y-m-d");
    $dia = date("d");
    $mes = date("n")-1;
    $anio = date("y");


    print("Hoy es: ".$dia. " de ".$meses[$mes]." de ".$anio);
?>