<!DOCTYPE html>
<html>
    <head>
        <title>Edad</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <?php
            for($r=200; $r <=255; $r+=20){
                for($g=200; $g <=255; $g+=20){
                    for($b=200; $b <=255; $b+=20){
                        echo "<button style='background-color:rgb($r, $g, $b)'>.....</button>";
                    }
                }
            }
        ?>
    </body>
</html>
            