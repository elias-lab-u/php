<?php
    class persona{
        public $nombre;
        public $telefono;

        public function __construct($nomb, $tel){
            $this->nombre = $nomb;
            $this->telefono = $tel;
        }

        public function obtener_datos(){
            return "nombre: ".$this->nombre."telefono: ".$this-> telefono;
        }
    }

    class alumno extends personal{
        private $grado;
        private $turno;

        public function __construct($nomb, $tel, $grado, $turno){
            parent::__construct($nom, $tel);
            $this->grado = $grado;
            $this->turno =$turno;
        }
        public function obtener_datos(){
            return parent::obtener_datos()."grado: ".$this->grado."turno; ".$this->turno;
        }
    }

?>
<h3<crear un objeto array de la clase alumno</h3>
<?php
    $alumno1 = new alumno("camila","0961123466","tercero - niviel medio","tarde");
?>
<h3>imprimir sus datos com foreach</h3>
<?php
    echo $alumno1->obtener_datos();
?>    

