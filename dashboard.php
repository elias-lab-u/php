<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>dashboard</title>
    </head>
    <body>
        <h2>sesion abierta</h2>
        <p>
        <?php
            if(isset($_POST['nombre'])){
                $_SESSION['nombre'] = $_POST['nombre'];
                echo "bienvenido:<b>".$_POST['nombre']."</b>";
            }else{
                if(isset($_SESSION['nombre'])){
                    echo "has iniciado sesion como:".$_SESSION['nombre'];
                }else{
                    echo "acceso restringido";
                }
            }
        ?></p>
        <br>
        <p><a href ="login.php">ir a la pagina inicial</a></p>
        <br>
        <p><a href="logout.php">cerrar sesion</a></p>
    </body>
</html>
