<?php
    class Automovil {
        public $color;
        public $motor;
        public $marca;

        public function obtener_color() {
            return $this->color;
        }
    }
    //crear 3 objetos de tipo Automóvil
    $auto1 = new Automovil();
    $auto1->color='verde';
    $auto1->motor=2.0;
    $auto1->marca='Toyota';

    $auto2 = new Automovil();
    $auto2->color='gris';
    $auto2->motor=1.5;
    $auto2->marca='Ford';

    //agregar un tercer auto
    $auto3 = new Automovil();
    $auto3->color='azul';
    $auto3->motor=1.0;
    $auto3->marca='Volvo';
?>

<h3>Impresión de colores de autos disponibles</h3>

<?php
  echo "Primer auto: " . $auto1->obtener_color();  
  echo "<br>Segundo auto: " . $auto2->obtener_color();
  echo "<br>Tercer auto: " . $auto3->obtener_color();
?>