<?php
    class Modulo{
        private $nombreModulo;
        private $duracion;

        public function __construct($nombreModulo, $duracion){
            $this->nombreModulo = $nombreModulo;
            $this->duracion = $duracion;
        }

        public function generarContenidoModulo(){
            return  "El módulo $this->nombreModulo tiene una duración de $this->duracion horas";
        }

        public function getDuracion(){
            return $this->duracion;
        }
    }
?>