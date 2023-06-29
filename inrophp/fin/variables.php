<?php
//Variables. Declaración y Uso.
$var_1 = 123;
$var_2 = 'hola';
$var_3 = $var_1 * 2;

//Variables. Tipado.
$mi_variable = 'Inicializamos como texto';
$mi_variable = 3;                   // Entero.
$mi_variable = 3.14 * $mi_variable; // Float.
$mi_variable = new MiClase();       // Objeto.

//conversiones automáticas
$mivar = 123;
echo $mivar;  // Se convierte a string
$mivar = '3';        // Se convierte a entero
$mivar = 2 + $mivar; // para realizar la suma

//cast
$mivar = (string)123;

//Cambiar el tipo de una variable
$mivar = 12;
settype($mivar, "double");

