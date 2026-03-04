<?php
require 'Automovil.php'; // Incluimos la clase Automovil

// Crear instancias de Automovil
$auto1 = new Automovil("Rojo", "Toyota", 4, false);
$auto2 = new Automovil("Negro", "Ford", 2, true);

// Mostrar información de los autos
echo "<h2>Información del Automóvil 1</h2>";
echo $auto1->mostrarDatos();

echo "<h2>Información del Automóvil 2</h2>";
echo $auto2->mostrarDatos();
?>