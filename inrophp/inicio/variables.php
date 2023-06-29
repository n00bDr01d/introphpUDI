<?php
/*
 * Pudedes usar la función var_dump() para mirar el contenido de la variable
 * o puedes verificar con echo el contenido de la misma
 * */
include 'includes/header.php';
//Variables. Declaración y Uso.
$var_1 = ;// declara un entero
$var_2 = '';//declara una cadena
$var_3 = ; //multiplica la variable uno por un numero

//Variables. Tipado.
$mi_variable = 'Inicializamos como texto';
$mi_variable = ;                   // Entero. asigna un numero entero
$mi_variable = ; // Float. asigna el valor 3.14 y multiplicalo * $mi_variable
$mi_variable = ; // Objeto. Declara un objeto

//conversiones automáticas
$mivar = 123; //asigna un numero entero y a continuación prueba con echo
              // Se convierte a string
$mivar = '3';        // Asigna un numero entre comillas simples. Ej.'3'
$mivar = 2 + $mivar; // escribe $mivar = 2 + $mivar  para convertir a entero

//cast
$mivar = ; // escribe (string)123 para hacer un cast

//Cambiar el tipo de una variable
$mivar = 12; // a continuación
settype($mivar, "double");

