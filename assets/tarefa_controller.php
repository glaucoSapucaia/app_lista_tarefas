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

    // DEBUG

    // echo $acao;

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
        // instancias para novo objeto TarefaService
        $tarefa = new Tarefa();
        $conexao = new Conexao();

        $tarefa_service = new TarefaService($conexao, $tarefa);
        $tarefas = $tarefa_service->recuperar();

        // DEBUG

        // echo 'Chegamos até aqui!';

    } else if($acao == 'atualizar') {
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_POST['id']);
        $tarefa->__set('tarefa', $_POST['tarefa']);

        $conexao = new Conexao();
        $tarefa_service = new TarefaService($conexao, $tarefa);

        // Executando query e redirecionando usuário a partir do retorno booleano
        if($tarefa_service->atualizar()) {
            header('Location: ../pages/todas_tarefas.php');
        } 

        // DEBUG

        // echo 'Estamos no atualizar!';

        // echo '<pre>';
        //     print_r($_POST);
        // echo '</pre>';

    } else if($acao == 'remover') {
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_GET['id']);

        $conexao = new Conexao();

        $tarefa_service = new TarefaService($conexao, $tarefa);
        $tarefa_service->remover();

        // Redirecionando usuário
        header('Location: ../pages/todas_tarefas.php');
        
        // DEBUG

        // echo 'Chegamos no remover';

    } else if($acao == 'marcarRealizada') {
        $tarefa = new Tarefa();
        $tarefa->__set('id', $_GET['id']);
        $tarefa->__set('id_status', 2);

        $conexao = new Conexao();

        $tarefa_service = new TarefaService($conexao, $tarefa);
        $tarefa_service->marcarRealizada();

        // Redirecionando usuário após ação
        header('Location: ../pages/todas_tarefas.php');
    }

    // // DEBUG

    // echo '<pre>';
    //     print_r($tarefa_service);
    // echo '</pre>';

    // echo '<pre>';
    //     print_r($_POST);
    // echo '</pre>';
?>