<?php
    class Instructor{
        private $nombre;
        private $grado;
        private $modulos = [];

        public function __construct($nombre, $grado){
            $this->nombre = $nombre;
            $this->grado = $grado;
        }

        public function agregarModulo($modulo){
            $this->modulos[] = $modulo;
        }

        public function getModulos(){
            return $this->modulos;
        }

        public function getNombre(){
            return $this->nombre;
        }

        public function getGrado(){
            return $this->grado;
        }
    }
?>