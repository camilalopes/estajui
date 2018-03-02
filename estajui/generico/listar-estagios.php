<?php
  require_once('../../scripts/controllers/generico/listar-estagios.php');
  //$errosExibir = $session->getErrors('normal');
?>

<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Relatórios | Coordenação de Extensão </title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/css/bootstrap.min.css" integrity="sha384-PsH8R72JQ3SOdhVi3uxftmaW6Vc51MKb0q5P2rRUpPvrszuE4W1povHYgTpBfshb" crossorigin="anonymous">
    <link rel="stylesheet" href="../../assets/css/icons/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../assets/css/main.css">
  </head>
  <body>
    <div class="container-home container-fluid fullscreen">
      <nav class="navbar navbar-expand-lg navbar-light nav-menu">
        <a class="navbar-brand" href="#">
          <img src="../../assets/img/LOGO.PNG" height="42" class="d-inline-block align-top" alt="">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <ul class="nav-content navbar-nav">
            <li>
              <span class="navbar-text">
                Fulaninho de Tal
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
              <a class="nav-link active" href="#">Home</a>
            </li>
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
            <li class="nav-item">
              <a class="nav-link" href="#">Relatórios</a>
            </li>
          </ul>
        </div>

        <div class="col-lg-10 status-desc">
          <div class="row">
            <div class="offset-md-1 col-md-10">
              <form class="container" id="needs-validation" novalidate>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom01">Aluno</label>
                    <input type="text" class="form-control" id="validationCustom01">
                  </div>
                  <div class="col-md-6 mb-3">
                    <label for="">Professor orientador</label>
                    <input type="text" class="form-control" id="">
                  </div>
                </div>
				<div class="row">
				  <div class="col-md-6 mb-3">
					  <label for="">Responsável</label>
				      <input type="text" class="form-control" id="">
				  </div>
				  <div class="col-md-6 mb-3">
					  <label for="">Empresa</label>
				      <input type="text" class="form-control" id="">
				  </div>
				</div>
                <div class="row">
                  <div class="col-md-6 mb-3">
                    <label for="validationCustom05">Data inicio</label>
                    <input type="date" class="form-control" id="validationCustom05">
                  </div>
                  <div class="col-md-6 mb-2">
                    <label>Data conclusão</label>
                    <input type="date" class="form-control" id="validationCustom06">
                  </div>
                </div>

                <div class="row">
                  <div class="col-md-12" style="margin-top: 30px; margin-bottom: 30px;">
                    <a href="#tabela"><button id="filtrar" class="btn btn-success" type="button">Filtrar</button></a>
                  </div>
                </div>
              </form>
            </div>
          </div>

          <div class="row table-estagios">
            <div class="offset-lg-1 col-lg-10 table-title bg-gray">
              <h3 class=""> Todos os estágios </h3>
              <button class="btn btn-success" type="submit"
              style="margin-top: -50px; float: right;">Gerar arquivo</button>
            </div>

            <div class="offset-lg-1 col-lg-10" style="padding: 0;">
              <table class="table table-bordered" id="tabela">
                <thead>
                  <tr>
                    <th scope="col">#</th>
                    <th scope="col">Status</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Data início</th>
                    <th scope="col">Curso</th>
                    <th scope="col">Editar</td>
                    <th scope="col">Ver</td>
                  </tr>
                </thead>
                <tbody>
                  <tr class="red">
                    <th scope="row">1</th>
                    <td>Solicitação de estágio aguardando deferimento.</td>
                    <td>Igor Alberte Rodrigues</td>
                    <td>22/11/2017</td>
                    <td>Ciência da Computação</td>
                    <td class="center">
                      <button type="button" class="btn btn-link"
                        data-toggle="modal" data-target="#solicitacaoEstagio">
                        <i class="fa fa-pencil"></i>
                      </button>
                    </td>
                    <td class="center"><a href="#"> <i class="fa fa-eye"></i> </a></td>
                  </tr>
                  <tr class="red">
                    <th scope="row">2</th>
                    <td>Aguardando documentos iniciais (FM, PE, TC).</td>
                    <td>Fulano de tal</td>
                    <td>15/11/2017</td>
                    <td>Engenharia Química</td>
                    <td class="center">
                      <button type="button" class="btn btn-link"
                        data-toggle="modal" data-target="#autorizacaoEstagio">
                        <i class="fa fa-pencil"></i>
                      </button>
                    </td>
                    <td class="center"><a href="#"> <i class="fa fa-eye"></i> </a></td>
                  </tr>
                  <tr class="red">
                    <th scope="row">3</th>
                    <td>Aguardando documentos finais de estágio.</td>
                    <td>Siclano</td>
                    <td>10/07/2017</td>
                    <td>Ciência da Computação</td>
                    <td class="center">
                      <button type="button" class="btn btn-link"
                        data-toggle="modal" data-target="#conclusaoEstagio">
                        <i class="fa fa-pencil"></i>
                      </button>
                    </td>
                    <td class="center"><a href="#"> <i class="fa fa-eye"></i> </a></td>
                  </tr>
                  <tr class="green">
                    <th scope="row">4</th>
                    <td>Concluído</td>
                    <td>Beltrano</td>
                    <td>01/09/2015</td>
                    <td>Técnico em informática</td>
                    <td class="center"><a href="#"> <i class="fa fa-pencil"></i> </a></td>
                    <td class="center"><a href="#"> <i class="fa fa-eye"></i> </a></td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
	<!--script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script-->
	 <script src="../../assets/js/jquery-1.9.0.min.js" type="text/javascript" charset="utf-8"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.3/umd/popper.min.js" integrity="sha384-vFJXuSJphROIrBnz7yo7oB41mKfc8JzQZiCq4NCceLEaO4IHwicKwpJf9c9IpFgh" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.2/js/bootstrap.min.js" integrity="sha384-alpBpkh1PFOepccYVYDB4do5UnbKysX5WZXm3XxPqe5iKTfUKjNkCk9SaVuEZflJ" crossorigin="anonymous"></script>
	<script src="../../assets/js/busca_estagio.js"></script> 
    
 </body>
</html>
