<!DOCTYPE html>
<html>
    <head>
        <title>Edad</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <?php
            $edad  = 12;
            if($edad >= 18 && $edad <=80) {
                echo "eres mayor de edad";
            }else if($edad <= 18 && $edad >= 11){
                echo "eres menor de edad";
            }else{
                echo "algo anda mal :( ";
            }
        ?>
    </body>
</html>