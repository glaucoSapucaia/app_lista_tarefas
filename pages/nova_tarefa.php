<!doctype html>
<html lang="pt-br">
    <head>
        <title>Nova Tarefa | APP</title>
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

        <!-- mensagem usuário S -->
        <?php
            // Verificando parametro | ?inclusao=1
            if(isset($_GET['inclusao']) && $_GET['inclusao'] == 1) { ?>
                <div class="bg-success pt-2 text-white d-flex justify-content-center">
                    <h5>Tarefa inserida com sucesso!</h5>
                </div>
        <?php } ?>
        <!-- mensagem usuario E -->

        <!-- app S -->
        <div class="container app">
            <div class="row">
                <!-- menu S -->
                <div class="col-md-3 menu">
                    <ul class="list-group">
                        <li class="list-group-item"><a href="index.php">Tarefas pendentes</a></li>
                        <li class="list-group-item active"><a href="#">Nova tarefa</a></li>
                        <li class="list-group-item"><a href="todas_tarefas.php">Todas as tarefas</a></li>
                    </ul>
                </div>
                <!-- menu E -->

                <!-- pagina S -->
                <div class="col-md-9">
                    <div class="container pagina">
                        <div class="row">
                            <div class="col">
                                <h4>Nova tarefa</h4>
                                <hr>

                                <!-- nova tarefa S -->
                                 <!-- Definindo metodo = post | action = arquivo php! | name = tarefa (necessário para super global $_POST) -->
                                <form action="../assets/tarefa_controller.php" method='post'>
                                    <div class="form-group">
                                        <label for="" class='mb-2'>Descrição da tarefa:</label>
                                        <input type="text" class='form-control mb-4' placeholder='Exemplo: Lavar o carro' name='tarefa'>
                                    </div>

                                    <button class="btn btn-success">Cadastrar</button>
                                </form>
                                <!-- nova tarefa E -->
                            </div>
                        </div>
                    </div>
                </div>
                <!-- pagina E -->
            </div>
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
    </body>
</html>
