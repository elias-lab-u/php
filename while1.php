<!DOCTYPE html>
<html>
    <head>
        <title>Temperatura</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <?php

            $temperatura = 0;

            while($temperatura <= 100){
                echo "La temperatura es: $temperatura";
                $temperatura++;
                echo "<br>";
            }
        ?>
    </body>
</html>