<!DOCTYPE html>
<html>
    <head>
        <title>operadores</title>
        <meta charset="UTF-8"/>
    </head>
    <body>
        <h3>Operadores aritmeticos</h3>
        <?php
            $a = 8;
            $b = 3;
            echo $a + $b, "<br>";
            echo $a - $b, "<br>";
            echo $a * $b, "<br>";
            echo $a / $b, "<br>";
            $a++;
            echo $a++,"<br>";
            $b--;
            echo $b--,"<br>";
        ?>
        <h3>operadores de comparacion</h3>
        <?php
            $a = 8;
            $b = 3;
            $c = 3;
            echo $a == $b, "<br>";
            echo $a != $b, "<br>";
            echo $a < $b, "<br>";
            echo $a > $b, "<br>";
            echo $a >= $b, "<br>";
            echo $a <= $b, "<br>";
        ?>
        <h3> operadores logicos</h3>
        <?php
            $a = 8;
            $b = 3;
            $c = 3;
            echo ($a == $b) && ($c > $b), "<br>";
            echo ($a == $b) || ($b == $c), "<br>";
            echo !($b <= $c), "<br>";
        ?>
    </body>
</html>