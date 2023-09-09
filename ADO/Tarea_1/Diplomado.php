<?php
    require_once 'Modulo.php';
  class Diplomado extends ProgramaEstudios{
        private $modulos = [];

        public function agregarModulos($nombre, $duracion){
            $this->modulos[] = new Modulo($nombre, $duracion);
        }

        public function obtenerModulos(){
            return $this->modulos;
        }

        public function verificarDuracion(){
            $this->duracionPE = 0;
            foreach($this->modulos as $modulo){
                $this->duracionPE += $modulo->getDuracion();
            }
            return $this->duracionPE >= 120;
        }
  }
?>