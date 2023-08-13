<?php
/*
 *
 * */
class PersonDTO {
    private $nombre;
    private $edad;
    private $email;

    public function __construct($nombre, $edad, $email) {
        $this->nombre = $nombre;
        $this->edad = $edad;
        $this->email = $email;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getEdad() {
        return $this->edad;
    }

    public function getEmail() {
        return $this->email;
    }
}

?>
