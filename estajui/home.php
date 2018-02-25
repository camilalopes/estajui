<?php
require_once $_SERVER['DOCUMENT_ROOT'] . "/estajui/scripts/controllers/HomeController.php";
?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Página inicial | <?php echo $titulo ?></title>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
        <link rel="stylesheet" href="../assets/css/icons/css/font-awesome.min.css">
        <link rel="stylesheet" href="../assets/css/main.css">
    </head>
    <body>
        <div class="container-home container-fluid fullscreen">
            <nav class="navbar navbar-expand-lg navbar-light nav-menu">
                <a class="navbar-brand" href="#">
                    <img src="../assets/img/LOGO.PNG" height="42" class="d-inline-block align-top" alt="">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">

                    <ul class="nav-content navbar-nav">
                        <li>
                            <span class="navbar-text">
                                <?php echo $nome ?>
                            </span>
                        </li>
                        <li class="nav-item">
                            <form method="get">
                                <button type="submit" name="logoff" class="btn btn-outline-light bt-sair">Sair</button>
                            </form>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
                                <span class="notification"> 5 </span>
                            </a>
                        </li>
                    </ul>
                </div>
            </nav>

            <div class="row fullscreen">
                <div class="col-lg-2 left-menu">
                    <ul class="nav flex-column">

                        <!--Comum a todos-->
                        <li class="nav-item">
                            <a class="nav-link active" href="#">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Meus dados</a>
                        </li>

                        <!--Estudante-->
                        <?php
                        if (is_a($usuario, "Aluno")) {
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Histórico de estágios</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Orientações gerais</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">+ Novo estágio</a>
                            </li>
                            <?php
                        }
                        ?>



                        <!--ROOT, CE-->
                        <?php
                        if (is_a($usuario, "Funcionario")) {
                            if ($usuario->isroot() || $usuario->isce()) {
                                ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Usuários</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Empresas</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Professores</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Cursos</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" href="#">Campi</a>
                                </li>
                                <?php
                            }
                        }
                        ?>


                        <!--PO, SRA, ROOT, CE, OE-->
                        <?php
                        if (!is_a($usuario, "Aluno")) {
                            ?>
                            <li class="nav-item">
                                <a class="nav-link" href="#">Relatórios</a>
                            </li>
                            <?php
                        }
                        ?>

                    </ul>
                </div>
                <!--ROOT, CE-->
                <?php
                if (is_a($usuario, "Usuario")) {
                    if (count($estagios) == 0) {
                        ?>
                        <div class="col-lg-10 align-self-center center">
                            <button type="button" class="btn btn-outline-success" data-toggle="modal" data-target="#modalNovoEstagio" style="padding: 25px;">Novo estágio</button>

                            <!-- Modal para solicitar um novo estágio -->
                            <div class="modal fade" id="modalNovoEstagio" tabindex="-1" role="dialog" aria-labelledby="modalNovoEstagioTitle" aria-hidden="true">
                                <div class="modal-dialog" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalNovoEstagioTitle">Solicitação de estágio</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <form name="novo-estagio" style="text-align: left;">
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios1" value="option1" checked>
                                                            Obrigatório
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="exampleRadios1" id="exampleRadios2" value="option2">
                                                            Não obrigatório.
                                                        </label>
                                                    </div>
                                                </div>
                                                <div class="form-group">
                                                    <label>Campus</label>
                                                    <select class="form-control" required>
                                                        <option>Montes Claros</option>
                                                        <option>Januária</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <label>Curso</label>
                                                    <select class="form-control" required>
                                                        <option>Ciência da Computação</option>
                                                        <option>Engenharia Química</option>
                                                        <option>Téc em informática</option>
                                                    </select>
                                                </div>
                                                <div class="form-group">
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="" value="option1" checked>
                                                            Integral
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="" value="option2">
                                                            Matutino
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="" value="option3">
                                                            Vespertino
                                                        </label>
                                                    </div>
                                                    <div class="form-check">
                                                        <label class="form-check-label">
                                                            <input class="form-check-input" type="radio" name="exampleRadios" id="" value="option4">
                                                            Noturno
                                                        </label>
                                                    </div>
                                                </div>
                                            </form>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Sair</button>
                                            <button type="button" class="btn btn-primary">Confirmar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                    } else {
                        ?>
                        <div class="col-lg-10 status-desc">
                            <?php
                            $cont = 1;
                            foreach ($estagios as $estagio) {
                                if ($estagio->getstatus()->getcodigo() == 6) {
                                    ?>
                                    <div class="row">
                                        <div class="offset-lg-1 col-lg-10 status-desc-item bg-gray">
                                            <h3> Estágio atual <?php echo $cont; ?> </h3>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="offset-lg-1 col-lg-10 status-desc-item" style="border-bottom: none;">
                                            <h4>Status: </h4>
                                            <p><?php echo $estagio->getstatus()->getdescricao(); ?></p>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="offset-lg-1 col-lg-10 status-desc-item">
                                            <h4>Descrição: </h4>
                                            <p>Os documentos iniciais do estágio foram entregues e validados, você pode iniciar o estágio como
                                                estimado, após o término do estágio redija o relatório final como descrito no modelo e envie para
                                                análise do orientador.
                                            </p>
                                            <form>
                                                <div class="form-group">
                                                    <label for="exampleFormControlFile1">Relatório final</label>
                                                    <input type="file" class="form-control-file" id="exampleFormControlFile1">
                                                    <small id="fileHelpBlock" class="form-text text-muted">
                                                        O seu arquivo deve ter um tamanho máximo de X MB.
                                                    </small>
                                                </div>
                                            </form>
                                            <a href="#"><button type="button" class="btn btn-outline-success"
                                                                style="padding: 10px; width: 100px;">Enviar</button>
                                            </a>
                                        </div>
                                    </div>
                                    <div class="row" style="margin-bottom: 20px;"></div>
                                    <?php
                                }
                                $cont++;
                            }
                            ?>
                            <div class="row table-estagios">
                                <div class="offset-lg-1 col-lg-10 table-title bg-gray">
                                    <h3> Todos os estágios </h3>
                                </div>
                                <div class="offset-lg-1 col-lg-10" style="padding: 0;">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th scope="col">#</th>
                                                <th scope="col">Data início</th>
                                                <th scope="col">Empresa</th>
                                                <th scope="col">Status</th>
                                                <th scope="col">Curso</th>
                                                <th scope="col">Ver</td>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <?php
                                            $cont = 1;
                                            foreach ($estagios as $estagio) {
                                                ?>
                                                <tr>
                                                    <th scope="row"><?php echo $cont ?></th>
                                                    <td><?php echo $estagio->getpe()->getdata_inicio() ?></td>
                                                    <td><?php echo $estagio->getempresa()->getnome() ?></td>
                                                    <td><?php echo $estagio->getstatus()->getdescricao() ?></td>
                                                    <td><?php echo $estagio->getmatricula()->getcurso()->getnome() ?></td>
                                                    <td><a href="#"> <i class="fa fa-eye"></i> </a></td>
                                                </tr>
                                                <?php
                                                $cont++;
                                            }
                                            ?>
                                        </tbody>
                                    </table>
                                </div>
                            </div>
                        </div>
                        <?php
                    }
                }
                ?>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
    </body>
</html>
