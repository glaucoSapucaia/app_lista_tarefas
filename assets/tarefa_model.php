<!-- Script para ESTUDOS! -->
<!-- Num projeto real, arqquivos como este devem estar protegidos em diretório PRIVADOS -->

<?php
    // Objeto TAREFA
    class Tarefa {
        private $id;
        private $id_status;
        private $tarefa;
        private $data_cadastro;

        function __get($attr) {
            return $this->$attr;
        }

        function __set($attr, $value) {
            $this->$attr = $value;
        }
    }
?>