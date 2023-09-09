<?php
    require_once 'ProgramaEstudios.php';
    require_once 'Diplomado.php';

    $diplomado = new Diplomado("Diplomado en Programación Web", "01/01/2021", "01/07/2021");
    $diplomado->agregarModulos("Módulo 1", 40);
    $diplomado->agregarModulos("Módulo 2", 40);
    $diplomado->agregarModulos("Módulo 3", 40);

    if($diplomado->verificarDuracion()){
        echo "El diplomado tiene una duración de 120 horas o más";
    }else{  
        echo "El diplomado tiene una duración menor a 120 horas";
    }
?>