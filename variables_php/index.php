<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Práctica Completa de PHP</title>
</head>
<body>

<h2>Uso de Variables y Constantes</h2>

<?php
// =========================
// PRIMER EJEMPLO
// =========================

// Variables
$nombre = "Juan Pérez";
$edad = 20;
$ciudad = "Ciudad de México";
$precioProducto = 156.75;

// Constantes (se definen UNA sola vez)
define("EMPRESA", "Tech Solutions S.A.");
define("IVA", 0.16);

// Mostrar información
echo "<p>Nombre del usuario: <strong>$nombre</strong></p>";
echo "<p>Edad: <strong>$edad años</strong></p>";
echo "<p>Ubicación: <strong>$ciudad</strong></p>";
echo "<p>Precio del producto: <strong>$precioProducto</strong></p>";
echo "<p>Empresa: <strong>" . EMPRESA . "</strong></p>";

echo "<hr>";

// =========================
// OPERACIONES
// =========================

$precioConDescuento = $precioProducto * 0.9; // 10% descuento
echo "<p>Precio con 10% de descuento: <strong>$precioConDescuento</strong></p>";

$mensaje = "Bienvenido $nombre a " . EMPRESA;
echo "<p>$mensaje</p>";

echo "<hr>";

// =========================
// SEGUNDO EJEMPLO (Cliente)
// =========================

$nombre = "Valeria";
$edad = 18;
$ciudad = "Gómez Palacio, Durango";
$producto = "Audífonos Bluetooth";
$precioProducto = 850.00;

// Cálculos IVA
$ivaCalculado = $precioProducto * IVA;
$precioConIVA = $precioProducto + $ivaCalculado;

// Mostrar información
echo "<h2>Información del Cliente</h2>";
echo "<p>Cliente: <strong>$nombre</strong></p>";
echo "<p>Edad: <strong>$edad años</strong></p>";
echo "<p>Ciudad: <strong>$ciudad</strong></p>";
echo "<p>Producto: <strong>$producto</strong></p>";
echo "<p>Precio sin IVA: <strong>$precioProducto</strong></p>";
echo "<p>IVA (16%): <strong>$ivaCalculado</strong></p>";
echo "<p>Precio final con IVA: <strong>$precioConIVA</strong></p>";
echo "<p>Empresa: <strong>" . EMPRESA . "</strong></p>";

?>

</body>
</html>