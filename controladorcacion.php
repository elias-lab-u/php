<?php
    if(isset($_POST)){
        $autor = $_POST['autor'];
        $titulo = $_POST['titulo'];
        $nick = 'elias';
    }
?>
<?php
    include "conexion.php";
    $sql_insertar = "insert into cacion values(deafault, 'autor', '$titulo', '$nick');";
    $conexion->query ($sql_insertar);
    exit;
?>