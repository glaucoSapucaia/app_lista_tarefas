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
                <div class="col-md-3 menu">
                    <ul class="list-group">
                        <li class="list-group-item active"><a href="#">Tarefas pendentes</a></li>
                        <li class="list-group-item"><a href="nova_tarefa.php">Nova tarefa</a></li>
                        <li class="list-group-item"><a href="todas_tarefas.php">Todas as tarefas</a></li>
                    </ul>
                </div>
                <!-- menu E -->

                <!-- pagina S -->
                <div class="col-md-9">
                    <div class="container pagina">
                        <!-- row S -->
                        <div class="row">
                            <!-- col tarefas S -->
                            <div class="col">
                                <h4>Tarefas pendentes</h4>
                                <hr>
                                <!-- tarefa S -->
                                <div class="row mb-3 d-flex align-items-center tarefa">
                                    <div class="col-sm-9">Lavar carro</div>
                                    <div class="col-sm-3 mt-2 d-flex justify-content-between">
                                        <ion-icon name="close-circle-outline" size='large' class='text-danger'></ion-icon>
                                        <ion-icon name="create-outline" size='large' class='text-info'></ion-icon>
                                        <ion-icon name="checkbox-outline" size='large' class='text-success'></ion-icon>
                                    </div>
                                </div>
                                <!-- tarefa E -->

                                <!-- tarefa S -->
                                <div class="row mb-3 d-flex align-items-center tarefa">
                                    <div class="col-sm-9">Lavar carro</div>
                                    <div class="col-sm-3 mt-2 d-flex justify-content-between">
                                        <ion-icon name="close-circle-outline" size='large' class='text-danger'></ion-icon>
                                        <ion-icon name="create-outline" size='large' class='text-info'></ion-icon>
                                        <ion-icon name="checkbox-outline" size='large' class='text-success'></ion-icon>
                                    </div>
                                </div>
                                <!-- tarefa E -->
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
