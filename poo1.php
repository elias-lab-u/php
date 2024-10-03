<?php
    class automovil{
        public $color;
        public $motor;
        public $marca;

        public function obtener_color(){
            return $this->color;
        }
    }
    $auto = new automovil();
    $auto ->color ='verde';
    $auto ->motor = 2.0;
    $auto ->marca = 'toyota';

    $auto = new automovil;
    $auto ->color = 'gris';
    $auto ->motor = 1.5;
    $auto ->marca = 'ford';

?>
<h3>imprimir los colores de autos disponibles</h3>
<?php
    echo "preimer auto: ".$auto1-> obtener_color();
    echo "<br>segundo auto: ".$auto2-> obtener_color();
    echo "<br>tercer auto: ";
?>