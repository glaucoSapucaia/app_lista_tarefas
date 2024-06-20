<!-- Script para ESTUDOS! -->
<!-- Num projeto real, arqquivos como este devem estar protegidos em diretório PRIVADOS -->

<!-- Para isso, use require! -->

<?php
    // Classe TarefaService | CRUD
    class TarefaService {
        // ATTRs
        private $conexao;
        private $tarefa;

        // Construtor
        // Tipagem | Podemos indicar o tipo do dado que será recebido!
        public function __construct(Conexao $conexao, Tarefa $tarefa) {
            $this->conexao = $conexao;
            $this->tarefa = $tarefa;
        }

        // Métodos
        public function inserir() {}

        public function recuperar() {}

        public function atualizar() {}

        public function remover() {}
    }
?>