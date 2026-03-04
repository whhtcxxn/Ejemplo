<?php
require 'Persona.php';

echo "<h2>Lista de Personas</h2>";

// Persona 1
$persona1 = new Persona("Cristian", 19, "Estudiante", "Durango", "Mexicano");
echo "<p>" . $persona1->presentarse() . "</p>";

// Persona 2
$persona2 = new Persona("Valeria", 18, "Estudiante", "Durango", "Mexicana");
echo "<p>" . $persona2->presentarse() . "</p>";

// Persona 3 (edad negativa para probar validación)
$persona3 = new Persona("Elaiyah", -5, "Cantante", "Argentina", "Argentino");
echo "<p>" . $persona3->presentarse() . "</p>";

?>