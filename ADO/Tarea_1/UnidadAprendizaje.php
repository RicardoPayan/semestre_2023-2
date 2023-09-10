<?php
    class UnidadAprendizaje{
        private $nombreUnidad;
        private $numUnidad;
        private $listaTemas;

        public function __construct($nombreUnidad, $numUnidad){
            $this->nombreUnidad = $nombreUnidad;
            $this->numUnidad = $numUnidad;
        }

        public function generarContenidoUnidad(){
            return "Contenido de la unidad de aprendizaje: ".$this->nombreUnidad." ".$this->numUnidad;
        }

        public function agregarModulo($modulo){
            $this->listaTemas[] = $modulo;
        }

        public function obtenerModulos(){
            return $this->listaTemas;
        }
    }
?>