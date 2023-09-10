<?php
function modulos_instructor($instructor) {
    echo "Nombre del Instructor: " . $instructor->getNombre() . "\n";

    $modulosRelacionados = $instructor->getModulos();

    if (!empty($modulosRelacionados)) {
        echo "Módulos Relacionados:\n";
        foreach ($modulosRelacionados as $modulo) {
            echo "- " . $modulo->generarContenidoModulo() . "\n";
        }
    } else {
        echo "El instructor no tiene módulos relacionados.\n";
    }
}


?>