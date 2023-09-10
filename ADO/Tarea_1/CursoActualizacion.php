<?php
    class CursoActualizacion extends ProgramaEstudios{
        private $modulos = [];

        public function agregarModulo(Modulo $modulo) {
            $this->modulos[] = $modulo;
        }
    
        public function obtenerModulos() {
            return $this->modulos;
        }
    }
?>