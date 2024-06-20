<!-- Script para ESTUDOS! -->
<!-- Num projeto real, arqquivos como este devem estar protegidos em diretório PRIVADOS -->

<?php
// Objeto CONEXÂO
    class Conexao {
        // ATTRS para PDO
        private $host = 'localhost';
        private $dbname = 'db_lista_tarefas';
        private $user = 'root';
        private $password = '';

        // função Conectar
        public function conectar() {
            try {
                // Instanciando conexão
                $conexao = new PDO(
                    "mysql:host=$this->host;dbname=$this->dbname",
                    "$this->user",
                    "$this->password"
                );

                return $conexao;
            
            // Tratando exceções
            } catch(PDOException $e) {
                echo '<p>' . $e->getMessage() . '</p>';
            }
        }
    }
?>