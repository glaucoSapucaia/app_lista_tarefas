<?php
    // Controlando fluxo da página
    $acao = 'recuperar';

    require '../assets/tarefa_controller.php';

    // DEBUG

    // echo '<pre>';
    //     print_r($tarefas);
    // echo '</pre>';
?>

<!doctype html>
<html lang="pt-br">
    <head>
        <title>Lista de Tarefas | APP</title>
        <!-- Required meta tags -->
        <meta charset="utf-8" />
        <meta
            name="viewport"
            content="width=device-width, initial-scale=1, shrink-to-fit=no"
        />

        <!-- Bootstrap CSS v5.2.1 -->
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN"
            crossorigin="anonymous"
        />

        <!-- CSS -->
        <link rel="stylesheet" href="../css/style.css">

        <!-- scripts -->
        <script>
            // Editando tarefas

            function editar(id, txt_tarefa) {
                // form para edicao
                // form
                let form = document.createElement('form');
                // Action do form com parametro para controle do fluxo da aplicação | ?acao=atualizar
                form.action = '../assets/tarefa_controller.php?acao=atualizar';
                form.method = 'POST';
                form.className = 'row';

                // input
                let input_tarefa = document.createElement('input');
                input_tarefa.type = 'text';
                input_tarefa.name = 'tarefa';
                input_tarefa.className = 'col-9';
                input_tarefa.value = txt_tarefa;

                // input hidden para coluna id da terfa no DB
                let input_id = document.createElement('input');
                input_id.type = 'hidden';
                input_id.name = 'id';
                input_id.className = 'id';
                input_id.value = id;

                // button
                let button = document.createElement('button');
                button.type = 'submit';
                button.className = 'col-3 btn btn-info';
                button.innerHTML = 'Atualizar';

                // construindo elemento
                form.appendChild(input_tarefa);
                form.appendChild(input_id);
                form.appendChild(button);

                // Selecionando div tarefa especifica
                let tarefa = document.getElementById('tarefa_' + id);

                // limpando conteudo da tarefa para inclusao do form
                tarefa.innerHTML = '';

                // Incluindo form na pagina
                // insertBefore() -> Adiciona uma árvore de elementos HTML em um elemento ja renderizado
                    // 1. arvore de elementos a ser adicionada
                    // 2. nó para a adição + o indice do elemento interno
                tarefa.insertBefore(form, tarefa[0]);

                // DEBUG

                // alert('Funcionou');
                // console.log(form);
                // alert(id);
                // alert(txt_tarefa);
            }

            // removendo tarefas
            function remover(id) {
                // fazendo requisição do script com parametro remover | ?acao=remover
                // para adicionar mais de um parametro use | &
                location.href = "todas_tarefas.php?acao=remover&id=" + id;
            }

            // Marcando como tarefa realizada
            function marcarRealizada(id) {
                // rederizando mesma pagina com parametro de tarefa realizada
                location.href = "todas_tarefas.php?acao=marcarRealizada&id=" + id;
            }

        </script>
    </head>

    <body>
        <!-- nav S -->
        <nav class="navbar navbar-light bg-light">
            <!-- container S -->
                <div class="container">
                    <a href="#" class="navbar-brand">
                        <img src="../imgs/logo.jpg" width='30' height='30' class='d-inline-block align-top' alt="">
                        App Lista Tarefas
                    </a>
                </div>
            <!-- container E -->
        </nav>
        <!-- nav E -->

        <!-- app S -->
        <div class="container app">
            <!-- row S -->
            <div class="row">
                <!-- menu S -->
                <div class="col-sm-3 menu">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="index.php">Tarefas pendentes</a></li>
                        <li class="list-group-item"><a href="nova_tarefa.php">Nova tarefa</a></li>
                        <li class="list-group-item active"><a href="#">Todas as tarefas</a></li>
                    </ul>
                </div>
                <!-- menu E -->

                <!-- pagina S -->
                <div class="col-sm-9">
                    <div class="container pagina">
                        <!-- row S -->
                        <div class="row">
                            <!-- col tarefas S -->
                            <div class="col">
                                <h4>Todas as tarefas</h4>
                                <hr>

                                <!-- Recuperando terefas dinamicamente do DB ($tarefas de tarefa_controller.php) -->
                                <?php
                                    foreach($tarefas as $key => $tarefa) { ?>
                                        <!-- tarefa S -->
                                        <div class="row mb-3 d-flex align-items-center tarefa">
                                            <!-- Incluindo elemento de edição de tarefa | id dinamico para função editar -->
                                            <div class="col-sm-9" id="tarefa_<?=$tarefa->id?>">
                                                <?=$tarefa->tarefa?> (<?=$tarefa->status?>)
                                            </div>
                                            <div class="col-sm-3 mt-2 d-flex justify-content-between">
                                                <!-- Adicionando id dinamico para remoção de tarefa | onclick= -->
                                                <ion-icon name="close-circle-outline" size='large' class='text-danger' onclick="remover(<?=$tarefa->id?>)"></ion-icon>

                                                <!-- Exibindo editar e marcarRealizada apenas para tarefas pendentes! -->
                                                <?php
                                                    if($tarefa->status == 'pendente') { ?>
                                                        <!-- Adicionando id dinamico da tarefa à função do onclick= -->
                                                        <!-- Adicionando descrição ja existente da tarefa para edição mais rápida | STRING -->
                                                        <ion-icon name="create-outline" size='large' class='text-info' onclick="editar(<?=$tarefa->id?>, '<?=$tarefa->tarefa?>')"></ion-icon>
                                                        <!-- Adicionando id dinamico para atualizar status da tarefa | onclick -->
                                                        <ion-icon name="checkbox-outline" size='large' class='text-success' onclick="marcarRealizada(<?=$tarefa->id?>)"></ion-icon>
                                                <?php } ?>
                                            </div>
                                        </div>
                                        <!-- tarefa E -->   
                                <?php } ?>

                            </div>
                            <!-- col tarefas E -->
                        </div>
                        <!-- row E -->
                    </div>
                </div>
                <!-- pagina E -->
            </div>
            <!-- row E -->
        </div>
        <!-- app E -->

        <!-- Bootstrap JavaScript Libraries -->
        <script
            src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.8/dist/umd/popper.min.js"
            integrity="sha384-I7E8VVD/ismYTF4hNIPjVp/Zjvgyol6VFvRkX/vR+Vc4jQkC+hVqc2pM8ODewa9r"
            crossorigin="anonymous"
        ></script>

        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"
            integrity="sha384-BBtl+eGJRgqQAUMxJ7pMwbEyER4l1g+O15P+16Ep7Q9Q+zqX6gSbd85u4mG4QzX+"
            crossorigin="anonymous"
        ></script>

        <!-- icons -->
        <script type="module" src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.esm.js"></script>
        <script nomodule src="https://unpkg.com/ionicons@7.1.0/dist/ionicons/ionicons.js"></script>
    </body>
</html>
