<?php

ini_set('display_errors', 1);
error_reporting(E_ALL);

class Persona {
    public $nombre;
    public $edad;
    public $ocupacion;
    public $ciudad;
    public $nacionalidad;

    public function __construct($nombre, $edad, $ocupacion, $ciudad, $nacionalidad) {
        
        // Validación para evitar edad negativa
        if ($edad < 0) {
            echo "<strong>Error:</strong> La edad no puede ser negativa.<br>";
            $this->edad = 0;
        } else {
            $this->edad = $edad;
        }

        $this->nombre = $nombre;
        $this->ocupacion = $ocupacion;
        $this->ciudad = $ciudad;
        $this->nacionalidad = $nacionalidad;
    }

    public function presentarse() {
        return "Hola, soy " . $this->nombre .
               ", tengo " . $this->edad .
               " años, soy " . $this->ocupacion .
               ", vivo en " . $this->ciudad .
               " y soy de nacionalidad " . $this->nacionalidad . ".";
    }

    public function cambiarOcupacion($nuevaOcupacion) {
        $this->ocupacion = $nuevaOcupacion;
        return "Actualización: Ahora mi ocupación es " . $this->ocupacion . ".";
    }
}

// BLOQUE DE EJECUCIÓN

echo "<h2>Prueba de Clase Persona</h2>";

// 1. Creamos una instancia de la clase
$usuario = new Persona("Juan Pérez", 28, "Desarrollador Web", "Gómez Palacio", "Mexicana");

// 2. Mostramos la presentación inicial (usamos echo porque el método tiene un return)
echo "<p>" . $usuario->presentarse() . "</p>";

echo "<hr>"; // Una línea divisoria

// 3. Cambiamos la ocupación y mostramos el resultado
echo "<p><i>" . $usuario->cambiarOcupacion("Líder de Proyecto") . "</i></p>";

// 4. Volvemos a presentarnos para ver el cambio reflejado
echo "<p>" . $usuario->presentarse() . "</p>";

?>