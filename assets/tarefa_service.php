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
            // Aqui, chamamos o método conectar do objeto conexão a fim de criar a comunicação com o DB
            $this->conexao = $conexao->conectar();
            $this->tarefa = $tarefa;
        }

        // Métodos
        public function inserir() {
            // Inserindo tarefas no DB com PREPARE | :
            $query = 'insert into tb_tarefas(tarefa)values(:tarefa)';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
            $stmt->execute();
        }

        public function recuperar() {}

        public function atualizar() {}

        public function remover() {}
    }
?>