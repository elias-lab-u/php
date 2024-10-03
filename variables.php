<!DOCTYPE html>
<html>
    <head>
        <title>comparar dos numeros</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <?php
            $numero_1 = 100;
            $numero_2 = 20;
            if($numero_1 > $numero_2){
                echo("el numero maryor es el numero_1  que es igual a ".$numero_1);
            }elseif($numero_1 < $numero_2){
                echo(" el numero mayor es el numero_2 que es igual a ".$numero_2);
            }elseif($numero_1 = $numero_2){
                echo ("ambos numeros son iguales");
            }else{}
        ?>
    </body>
</html>        
