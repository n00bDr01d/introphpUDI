<?php
include 'includes/header.php';
   echo date("d.m.y");
   echo "</br>";
if (date("d") % 2 == 0) {
    echo "Hoy es un día par";
} else {
    echo "Hoy es un día impar";
}
?>