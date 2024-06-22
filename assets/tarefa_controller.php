<!-- Script para ESTUDOS! -->
<!-- Num projeto real, arqquivos como este devem estar protegidos em diretório PRIVADOS -->

<!-- Para isso, use require! -->

<?php
    // Imports
    require "tarefa_model.php";
    require "tarefa_service.php";
    require "conexao.php";

    // teste para fluxo da página
    $acao = isset($_GET['acao']) ? $_GET['acao'] : $acao;

    // verificando parametro ?acao=inserir da super global $_GET
    if($acao == 'inserir') {

        // Instancias
        $tarefa = new Tarefa();
        $tarefa->__set('tarefa', $_POST['tarefa']);

        $conexao = new Conexao();

        $tarefa_service = new TarefaService($conexao, $tarefa);
        $tarefa_service->inserir();

        // redirecionando usuário
        // Adicionando parametro via GET | ?inclusao=1
        header('Location: ../pages/nova_tarefa.php?inclusao=1');
    } else if($acao == 'recuperar') {
        // DEBUG

        echo 'Chegamos até aqui!';
    }

    // // DEBUG

    // echo '<pre>';
    //     print_r($tarefa_service);
    // echo '</pre>';

    // echo '<pre>';
    //     print_r($_POST);
    // echo '</pre>';
?>