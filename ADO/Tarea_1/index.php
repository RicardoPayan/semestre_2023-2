<?php
    require_once 'ProgramaEstudios.php';
    require_once 'Diplomado.php';
    require_once 'Modulo.php';
    require_once 'Instructor.php';
    require_once 'UnidadAprendizaje.php';
    require_once 'CursoActualizacion.php';
    require_once 'ConsejoDivisional.php';
    require 'funciones/utils.php';


    /*
        Primer Escenario
        Generar un reporte de todos los modulos que imparte el Dr.Juan Gonzalez
    */
    // Crear instancia de Instructor
    $instructor = new Instructor("Dr.Juan González", "Doctor");

    // Crear instancias de Modulo y relacionarlos con el instructor
    $modulo1 = new Modulo("Introduccion a la programacion", 30, $instructor);
    $modulo2 = new Modulo("Programacion Orientada a Objetos", 30, $instructor);
    $modulo3 = new Modulo("Programacion Web", 30, $instructor);

    // Llamar a la función para imprimir el instructor y los módulos relacionados
    modulos_instructor($instructor);


    /*
        Segundo Escenario
        Mostrar que el diplomado "Privacidad en las redes sociales" tiene una duracion para este tipo de programas
    */

    // Crear instancia de Diplomado
    $diplomado = new Diplomado("Privacidad en las redes sociales", "01/01/2021", "31/12/2021");

    //Creas instacia de instructor
    $instructor_escenario2 = new Instructor("Daniel R. Ochoa", "Maestro");

    // Crear instancias de Modulo y relacionarlos con el diplomado
    $modulo1 = new Modulo("Introduccion a las redes sociales", 30, $instructor_escenario2);
    $modulo2 = new Modulo("Privacidad en las redes sociales", 30, $instructor_escenario2);

    //Verificar que la duración del diplomado sea mayor o igual a 120 horas
    if($diplomado->verificarDuracion()){
        echo "No cumple: El diplomado tiene una duración de 120 horas o más";
    }else{  
        echo "Cumple: El diplomado tiene una duración menor a 120 horas";
    }

    /*
        Tercer Escenario
        Aprobar el curso de actualizacion "Identificacion de sustentabilidad en el contexto de desarollo de software"
    */

    //Crear consejo divisional
    $consejo = new ConsejoDivisional();

    // Crear instancia de ProgramaEstudios
    $programa = new ProgramaEstudios("Ciencias de la computacion", "01/01/2021", "31/12/2021");

    //Consejo divisional aprueba el programa de estudios
    $consejo->aprobarProgramaEstudios($programa);

    //Crear instancia de curso de actualizacion
    $curso = new CursoActualizacion("Identificacion de sustentabilidad en el contexto de desarollo de software", "01/01/2021", "31/12/2021");

    //Hay que verificar que el programa de estudios este aprobado antes de aprobar el curso de actualizacion
    if($programa->estaAprobado()){
        $curso->setAprobado(True);
        echo "El programa de estudios ha sido aprobado";
    }else{
        echo "El programa de estudios no esta aprobado";
    }



?>