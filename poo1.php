<?php
    class Automovil {
        public $color;
        public $motor;
        public $marca;

        public function set_color($color){
            $this->color = $color;
        }
        public function get_color()
        {
            return $this->color;
        }
        public function get_datos()
        {
            return "Marca: ".$this->marca;" , Motor: ".$this->motor;
        }
    }
    //crear 3 objetos del tipo Automovil
    $auto1 = new Automovil();
    $auto1->color = 'Azul';
    $auto1->motor = 2.0;
    $auto1->marca = 'Suzuki';

    $auto2 = new Automovil();
    $auto2->color = 'Gris';
    $auto2->motor = 1.5;
    $auto2->marca = 'Hyundai';

    //agregar un tercer auto

    $auto3 = new Automovil();
    $auto3->color = 'Negro';
    $auto3->motor = 1.5;
    $auto3->marca = 'Toyota';
?>
<h1>Imprimir los colores de autos disponibles </h1>
<?php
    echo "Primer auto: ".$auto1->get_color();
    echo "<br>Segundo auto: ".$auto2->get_color();
    echo "<br>Tercer auto: ".$auto3->get_color();
?>