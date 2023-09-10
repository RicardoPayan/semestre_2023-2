<?php
    class Modulo{
        private $nombreModulo;
        private $duracion;
        private $instructor;

        public function __construct($nombreModulo, $duracion, $instructor=null){
            $this->nombreModulo = $nombreModulo;
            $this->duracion = $duracion;
            $this->instructor = $instructor;

            if($instructor != null){
                $instructor->agregarModulo($this);
            }
        }

        public function generarContenidoModulo(){
            return  "El módulo $this->nombreModulo tiene una duración de $this->duracion horas";
        }

        public function getDuracion(){
            return $this->duracion;
        }

        public function getInstructor(){
            return $this->instructor;
        }
    }
?>