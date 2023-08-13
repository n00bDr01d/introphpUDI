<?php

class MainView {
    public function render(PersonDTO $person) {
        echo "<h1>Datos de la Persona</h1>";
        echo "Nombre: " . $person->getNombre() . "<br>";
        echo "Edad: " . $person->getEdad() . " años<br>";
        echo "Email: " . $person->getEmail() . "<br>";
    }
}

?>
