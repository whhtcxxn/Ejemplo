<?php
// ===============================
// EJEMPLO 1: ESTRUCTURA IF
// ===============================

// Se declaran dos variables numéricas para comparar
$numero1 = 10;
$numero2 = 20;

// Se muestra un título en pantalla
echo "<h2>Ejemplo con IF</h2>";

// La estructura IF evalúa una condición
// Si la condición es verdadera, se ejecuta el código dentro del bloque
// Si es falsa, el código simplemente se omite
if ($numero1 < $numero2) {
    echo "El número $numero1 es menor que $numero2";
}

// ===============================
// EJEMPLO 2: ESTRUCTURA IF - ELSE
// ===============================

// Se muestra otro título
echo "<h2>Ejemplo con IF-ELSE</h2>";

// IF-ELSE permite ejecutar una acción si la condición es verdadera
// y otra acción diferente si la condición es falsa
if ($numero1 > $numero2) {
    echo "El número $numero1 es mayor que $numero2";
} else {
    echo "El número $numero1 NO es mayor que $numero2";
}

// ===============================
// EJEMPLO 3: IF - ELSEIF - ELSE
// ===============================

// Se declara una variable que almacena una temperatura
$temperatura = 15;

// Se muestra el título del ejemplo
echo "<h2>Ejemplo con IF-ELSEIF-ELSE</h2>";

// Esta estructura permite evaluar múltiples condiciones
// IF evalúa la primera condición
// ELSEIF evalúa una condición adicional si la anterior fue falsa
// ELSE se ejecuta cuando ninguna condición se cumple
if ($temperatura > 30) {
    echo "Hace mucho calor";
} elseif ($temperatura >= 15 && $temperatura <= 30) {
    echo "El clima es agradable";
} else {
    echo "Hace frío";
}


?>

<?php

// EJEMPLO 4: TEMPERATURA Y ESTACIONES
$temperatura = 22;
$estacion = "primavera";

echo "<h2>Evaluación de temperatura según la estación</h2>";

if ($estacion == "verano" && $temperatura >= 30) {
    echo "Es verano y hace mucho calor";
} elseif ($estacion == "verano") {
    echo "Es verano y el clima es moderado";
} elseif ($estacion == "primavera") {
    echo "Es primavera y el clima es agradable";
} elseif ($estacion == "otoño") {
    echo "Es otoño y el clima es fresco";
} elseif ($estacion == "invierno") {
    echo "Es invierno y hace frío";
} else {
    echo "Estación no reconocida";
}
?>


