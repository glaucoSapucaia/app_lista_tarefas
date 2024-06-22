<!-- Script para ESTUDOS! -->
<!-- Num projeto real, arqquivos como este devem estar protegidos em diretório PRIVADOS -->

<!-- Para isso, use require! -->

<?php
    // Imports
    require "tarefa_model.php";
    require "tarefa_service.php";
    require "conexao.php";

    // Instancias
    $tarefa = new Tarefa();
    $tarefa->__set('tarefa', $_POST['tarefa']);

    $conexao = new Conexao();

    $tarefa_service = new TarefaService($conexao, $tarefa);
    $tarefa_service->inserir();

    // // DEBUG

    echo '<pre>';
        print_r($tarefa_service);
    echo '</pre>';

    // echo '<pre>';
    //     print_r($_POST);
    // echo '</pre>';
?>