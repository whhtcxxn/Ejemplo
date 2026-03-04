<?php

class Producto {

    public $nombre;
    public $precio;
    public $categoria;
    public $stock;

    // Constructor
    public function __construct($nombre, $precio, $categoria, $stock) {
        $this->nombre = $nombre;
        $this->precio = $precio;
        $this->categoria = $categoria;
        $this->stock = $stock;
    }

    // Método para aplicar descuento
    public function aplicarDescuento($porcentaje) {
        $descuento = $this->precio * ($porcentaje / 100);
        $this->precio -= $descuento;
    }

    // Método para verificar disponibilidad
    public function estaDisponible() {
        return $this->stock > 0;
    }

    // Método para mostrar información
    public function mostrarInfo() {
        return "Producto: " . $this->nombre .
               " | Precio: $" . $this->precio .
               " | Categoría: " . $this->categoria .
               " | Stock: " . $this->stock .
               " | Disponible: " . ($this->estaDisponible() ? "Sí" : "No");
    }
}


//  Crear 3 productos

$producto1 = new Producto("Laptop", 15000, "Electrónica", 5);
$producto2 = new Producto("Audífonos", 800, "Accesorios", 0);
$producto3 = new Producto("Mouse", 400, "Accesorios", 10);

// Aplicar descuento al producto 1
$producto1->aplicarDescuento(10);

echo "<h2>Lista de Productos</h2>";
echo "<p>" . $producto1->mostrarInfo() . "</p>";
echo "<p>" . $producto2->mostrarInfo() . "</p>";
echo "<p>" . $producto3->mostrarInfo() . "</p>";

?>