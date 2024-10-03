<?php
    include "conexion.php";

    $sql = "SELECt nombre, autor, nickname, fecha 
    from cancion where usuario_nick like 'elias'";

    $resultado = $conexion->query($sql);
    ?>
    <h3>lista de canciones</h3>
    <table class= "table table-striped">
        <?php
            if($resultado->num_rows>0){
                while($fila = $resultado->fetch_assoc()){
                    echo "<tr>";
                    echo "<td>".$fila["nombre"]."</td>";
                    echo "<td>".$fila["autor"]."</td>";
                    echo "<td>".$fila["nickname"]."</td>";
                    echo "<td>".$fila["fecha"]."</td>";
                    echo "</tr>";
                }
            }else{
                echo "No tiene canciones aun :(";
            }
        ?>
    </table>
    <div class="col-sm-4">
        <h4>agrega la cancion</h4>
        <form method="post" action="controladorcancion.php">
            <input type="text" name="autor" placeholder="AUTOR" class="form-control">
            <input type="text" name="titulo" placeholder="TITULO" class="form-control">
            <input type="submit"value="agregar cancion" class="btn btn-ontline-dark">
        </form>
    </div>    

?>    