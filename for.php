<!DOCTYPE html>
<html>
    <head>
        <title>edad</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <?php
            for($x = 0 ; $x < 11 ; $x++){
                for($y = 0; $y <11 ; $y++){
                    echo "$x x $y = ".$x*$y, "<br>";
                }
                echo "<hr>";
            }
        ?>
    </body>
</html>
