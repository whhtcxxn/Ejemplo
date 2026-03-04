<?php
// Muestra un título en formato h2 en el navegador
echo "<h2>Números del 1 al 10 usando for</h2>";

// Estructura del ciclo for:
// $i = 1        -> Inicializa la variable en 1
// $i <= 10      -> Condición: el ciclo se ejecuta mientras $i sea menor o igual a 10
// $i++          -> Incrementa $i en 1 en cada repetición
for ($i = 1; $i <= 10; $i++) {

    // Imprime el número actual y un salto de línea en HTML
    echo "Número: $i <br>";
}
?>

<?php
// Se declara una variable llamada $numero y se le asigna el valor 5.
// Este valor puede cambiarse manualmente o recibirse desde un formulario.
$numero = 5;

// Muestra un título en el navegador indicando qué tabla se va a generar.
echo "<h2>Tabla de multiplicar del $numero</h2>";

// Ciclo for que se repetirá desde 1 hasta 10.
for ($i = 1; $i <= 10; $i++) {

    // Imprime cada operación de la tabla de multiplicar.
    // ($numero * $i) realiza la multiplicación.
    // El punto (.) se usa para concatenar texto en PHP.
    echo "$numero x $i = " . ($numero * $i) . "<br>";
}
?>

<?php
// Se crea un arreglo llamado $nombres que almacena varios nombres.
$nombres = array("Ana", "Carlos", "Beatriz", "Daniel", "Elena");

// Muestra un título en el navegador.
echo "<h2>Lista de nombres:</h2>";

// Abre una lista desordenada en HTML.
echo "<ul>";

// Ciclo for que recorre el arreglo desde la posición 0
// hasta el último elemento usando count() para saber cuántos elementos hay.
for ($i = 0; $i < count($nombres); $i++) {

    // Imprime cada nombre dentro de un elemento de lista <li>
    echo "<li>$nombres[$i]</li>";
}

// Cierra la lista desordenada.
echo "</ul>";
?>



<?php
// Muestra un título en el navegador indicando qué se va a mostrar.
echo "<h2>Números pares del 2 al 20</h2>";

// Ciclo for que inicia en 2 y termina en 20.
// $i = 2      -> Valor inicial.
// $i <= 20     -> Condición para que el ciclo continúe.
// $i += 2     -> Incrementa el valor de $i en 2 en cada repetición.
for ($i = 2; $i <= 20; $i += 2) {

    // Imprime el valor actual de $i seguido de un salto de línea en HTML.
    echo "$i <br>";
}
?>