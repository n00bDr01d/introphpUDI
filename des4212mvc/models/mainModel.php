<?php
require_once 'dto/PersonDTO.php';
class MainModel {
    public function getPersonData() {
        // Aquí podrías obtener datos de una base de datos, por ejemplo.
        return new PersonDTO('Juan Pérez', 30, 'juan.perez@email.com');
    }
}

?>
