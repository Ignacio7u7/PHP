<?php
    class Persona{
        public $nombre;
        public $telefono;

        public function __construct($nombre, $telefono){
            $this->nombre = $nombre;
            $this->telefono = $telefono;
        }

        public function get_datos(){
            return "Nombre: ".$this->nombre." <br>Telefono: ".$this->telefono;
        }
    }
    class Alumno extends Persona{
        private $grado;
        private $turno;

        public function __construct($nombre, $telefono, $grado, $turno){
            parent::__construct($nombre, $telefono);
            $this->grado = $grado;
            $this->turno = $turno;
        }

        public function get_datos(){
            return parent::get_datos()."<br>Grado: ".$this->grado." <br>Turno: ".$this->turno;
        }
    }

?>
<!-- <h1>Crear un objeto array de la clase alumno</h1> -->


<?php
    $alumno1 = new Alumno("Camila.","0961123466.","Tercero - Nivel Medio.","Tarde.");
?>

<h1>Imprimir sus datos con foreach </h1>
<?php
    echo $alumno1->get_datos();
?>