<!DOCTYPE html>
<?php
require_once('../../scripts/controllers/estudante/submeter_relatorio.php');
?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Página inicial | Estudante</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/icons/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
  </head>
  <body>
    <div class="container-home container-fluid fullscreen">
      <nav class="navbar navbar-expand-lg navbar-light nav-menu">
        <a class="navbar-brand" href="#">
          <img src="../../assets/img/logo.png" height="42" class="d-inline-block align-top" alt="">
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
              <button type="button" class="btn btn-outline-light bt-sair">Sair</button
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#"><i class="fa fa-envelope fa-2x" aria-hidden="true"></i>
              <span class="notification"> 5 </span>
              </a>
            </li>
          </ul>
        </div>
      </nav>

      <div class="row">
        <div class="col-lg-2 left-menu">
          <ul class="nav flex-column">
            <li class="nav-item">
              <a class="nav-link active" href="../home.php">Home</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Meus dados</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Histórico de estágios</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Orientações gerais</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">+ Novo estágio</a>
            </li>
          </ul>
        </div>


        <div class="col-lg-10 status-desc">
          <div class="row">
            <div class="offset-lg-1 col-lg-10 status-desc-item bg-gray">
              <h3> Estágio atual </h3>
            </div>
          </div>
          <div class="row">
            <div class="offset-lg-1 col-lg-10 status-desc-item" style="border-bottom: none;">
              <h4>Status: </h4>
              <p><?php echo $status?></p>
            </div>
          </div>
          <div class="row">
            <div class="offset-lg-1 col-lg-10 status-desc-item">
              <h4>Descrição: </h4>
              <p>Os documentos iniciais do estágio foram entregues e validados, você pode iniciar o estágio como
              estimado, após o término do estágio redija o relatório final como descrito no modelo e envie para
              análise do orientador.
              </p>
              <form method='POST' action = '../../scripts/controllers/estudante/submeter_relatorio.php'>
                <div class="form-group">
                  <label for="exampleFormControlFile1">Relatório final</label>
                  <input type="file" class="form-control-file" id="file">
                  <small id="fileHelpBlock" class="form-text text-muted">
                    O seu arquivo deve ter um tamanho máximo de 5 MB.
                  </small>
                </div>
                <button type="submit" class="btn btn-outline-success"
                 style="padding: 10px; width: 100px;">Enviar</button>
              </form>
            </div>
          </div>
          <div class="row table-estagios">
            <div class="offset-lg-1 col-lg-10 table-title">
              <h3 class="bg-gray"> Todos os estágios </h3>
            </div>
            <div class="offset-lg-1 col-lg-10">
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
                  <tr>
                    <th scope="row">1</th>
                    <td>22/11/2017</td>
                    <td>Padaria do Joaquim</td>
                    <td>Solicitação de estágio deferida pela secretária.</td>
                    <td>Ciência da Computação</td>
                    <td><a href="#"> <i class="fa fa-eye"></i> </a></td>
                  </tr>
                  <tr>
                    <th scope="row">2</th>
                    <td>01/09/2015</td>
                    <td>ATS informática</td>
                    <td>Concluído</td>
                    <td>Técnico em informática</td>
                    <td><a href="#"> <i class="fa fa-eye"></i> </a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
  </body>
</html>


 <?php if ($session->hasError("relatorio")) { ?>
                            <span class="error"><?php echo $session->getErrors("relatorio")[0];  ?></span>
<?php } ?>
               