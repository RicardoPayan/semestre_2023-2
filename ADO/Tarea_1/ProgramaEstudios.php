<?php
    class ProgramaEstudios{
        private $nombre;
        private $fechaInicio;
        private $fechaFinal;
        private $aprobado = false;
        protected $duracionPE;

        public function __construct($nombre, $fechaInicio, $fechaFinal){
            $this->nombre = $nombre;
            $this->fechaInicio = $fechaInicio;
            $this->fechaFinal = $fechaFinal;
        }

        
        public function estaAprobado() {
            return $this->aprobado;
        }

        public function setAprobado($aprobado) {
            $this->aprobado = $aprobado;
        }
    }
?>