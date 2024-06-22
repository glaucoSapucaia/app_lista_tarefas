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

        public function recuperar() {
            // Recuperando tarefas do DB com PREPARE | :
            $query = '
                select
                    t.id, s.status, t.tarefa
                from
                    tb_tarefas as t
                    left join tb_status as s on (t.id_status = s.id)
            ';
            $stmt = $this->conexao->prepare($query);
            $stmt->execute();

            // Recuperando dados como objetos
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }

        public function atualizar() {
            // Atualizando dados da DB com PREPARE
            $query = 'update tb_tarefas set tarefa = :tarefa where id = :id';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':tarefa', $this->tarefa->__get('tarefa'));
            $stmt->bindValue(':id', $this->tarefa->__get('id'));
            return $stmt->execute();

            // DEBUG

            // print_r($this->tarefa);
        }

        public function remover() {
            // Removendo tarefas do DB
            $query = 'delete from tb_tarefas where id = :id';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id', $this->tarefa->__get('id'));
            $stmt->execute();
        }

        public function marcarRealizada() {
            // marcando tarefa como realizada
            $query = 'update tb_tarefas set id_status = :id_status where id = :id';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id_status', $this->tarefa->__get('id_status'));
            $stmt->bindValue(':id', $this->tarefa->__get('id'));
            $stmt->execute();
        }

        public function recuperarTarefasPendentes() {
            // Recuperando tarefas PENDENTES do DB com PREPARE | :
            $query = '
                select
                    t.id, s.status, t.tarefa
                from
                    tb_tarefas as t
                    left join tb_status as s on (t.id_status = s.id)
                where
                    t.id_status = :id_status
            ';
            $stmt = $this->conexao->prepare($query);
            $stmt->bindValue(':id_status', $this->tarefa->__get('id_status'));
            $stmt->execute();

            // Recuperando dados como objetos
            return $stmt->fetchAll(PDO::FETCH_OBJ);
        }
    }
?>