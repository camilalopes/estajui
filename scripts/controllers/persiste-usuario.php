<?php

require_once(dirname(__FILE__) . '/base-controller.php');

$session = getSession();

var_dump($_POST);

///Comentar quando não for teste:
if(1)
///Descomentar quando não for teste
//if($session->isce())
{
	///Se idUsuario for vazio, é preciso salvar novo
	if (isset($_POST['cadastrar']) && strcmp($_POST['idUsuario'],"")==0 ){
	
	echo "Entrou1";
	//carregar arquivo da pasta util e model para cadastrar o aluno
	$loader->loadUtil('String');
	$loader->loadUtil('Session');
	$loader->loadDao('Funcionario');	

	//talvez seja uma boa inicializar o aluno pelo post(não no construtor, mas em um método init():bool)
	$funcionario = new Funcionario(null,null,null,null,null,null,null,null,null,null,null,null,null);
	$cursos = array();
	
	$funcionario->setnome(LimpaString::limpar($_POST['nome']));
	$funcionario->setsiape((int)(LimpaString::limpar($_POST['siape'])));
	
	$funcionario->setroot(0);
	$funcionario->setpo(0);
	if(isset($_POST['PO'])) {
		
	if($_POST['PO'] == "on")
	$funcionario->setpo(1);
	}
	
	$funcionario->setce(0);
	if(isset($_POST['CE'])) {
		
	if($_POST['CE'] == "on")
	$funcionario->setce(1);
	}
	
	$funcionario->setsra(0);
	if(isset($_POST['SRA'])) {

	if($_POST['SRA'] == "on")
	$funcionario->setsra(1);
	}
	
	$funcionario->setoe(0);
	if(isset($_POST['OE'])) {
		
	if($_POST['OE'] == "on")
	$funcionario->setoe(1);
	}
	$funcionario->setlogin(LimpaString::limpar($_POST['email']));
	
	if(isset($_POST['CComp']) && $_POST['CComp'] == "on")
		array_push($cursos,"cienciadacomputacao");
	if(isset($_POST['EQuim']) && $_POST['EQuim'] == "on")
		array_push($cursos,"engenhariaquimica");
	if(isset($_POST['TecInf']) && $_POST['TecInf'] == "on")
		array_push($cursos,"tecnicoeminformatica");
	if(isset($_POST['TecQuim']) && $_POST['TecQuim'] == "on")
		array_push($cursos,"tecnicoemquimica");
	if(isset($_POST['TecElet']) && $_POST['TecElet'] == "on")
		array_push($cursos,"tecnicoemeletrotecnica");
	
	
	$_SESSION['erros'] = 0;
	$_SESSION['mensagensErro'] = array();///Vetor que indica a presença de erros;
	
	if (!filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) || !filter_var($_POST["confirmEmail"], FILTER_VALIDATE_EMAIL)) {
		$_SESSION['mensagensErro'][$_SESSION['erros']] = "Os e-mails informados não são válidos!;";
		$_SESSION['erros']++;
		
	} else {
		if (strcmp($_POST["email"],$_POST["confirmEmail"])!=0) {
			$_SESSION['mensagensErro'][$_SESSION['erros']] = "Problema com o e-mail! Verifique se o de confirmação é o mesmo e-mail.;";
			$_SESSION['erros']++;
			
	}
	}

	if($_SESSION['erros'] != 0) {
		
		redirect(base_url() . '/estajui/coordenador-extensao/usuarios.php');
	}
	
	$model = $loader->loadModel('FuncionarioModel', 'FuncionarioModel');
	if($model != null){
		if(!$model->cadastrar($funcionario, $cursos)){
			$_SESSION['mensagensErro'][$_SESSION['erros']] = "Problema ao salvar! Erro no BD ou e-mail já cadastrado!";
			$_SESSION['erros']++;
			
		}
	}
	//header("Location: cadastro.php");
	//redirect(base_url() . '/estajui/coordenador-extensao/usuarios.php');
	}
else{

	if((isset($_POST['cadastrar']) && strcmp($_POST['idUsuario'],"")!=0 )) {
		///TRATAR CASO EM QUE É PARA ATUALIZAR DADOS
		//carregar arquivo da pasta util e model para cadastrar o aluno
		echo "Entrou";
		$loader->loadUtil('String');
		$loader->loadUtil('Session');
		$loader->loadDao('Funcionario');	
		
		$cursos = array();
		
		$funcionario = new Funcionario(null,null,null,null,null,null,null,null,null,null,null,null,null);
		
		$funcionarioModel = $loader->loadModel('FuncionarioModel', 'FuncionarioModel');
		
		$funcionario = ($funcionarioModel->read(((int)(LimpaString::limpar($_POST['idUsuario']))),1))[0];
		
		echo "<br><br>Funcionário<br><br>";
		var_dump($funcionario);
		
		$funcionario->setroot(0);
		$funcionario->setpo(0);
		if(isset($_POST['PO'])) {
			
			if($_POST['PO'] == "on")
				$funcionario->setpo(1);
		}
		
		$funcionario->setce(0);
		if(isset($_POST['CE'])) {
			
			if($_POST['CE'] == "on")
				$funcionario->setce(1);
		}
		
		$funcionario->setsra(0);
		if(isset($_POST['SRA'])) {

			if($_POST['SRA'] == "on")
				$funcionario->setsra(1);
		}
		
		$funcionario->setoe(0);
		if(isset($_POST['OE'])) {
			
			if($_POST['OE'] == "on")
				$funcionario->setoe(1);
		}
		
		if(isset($_POST['CComp']) && $_POST['CComp'] == "on")
			array_push($cursos,"cienciadacomputacao");
		if(isset($_POST['EQuim']) && $_POST['EQuim'] == "on")
			array_push($cursos,"engenhariaquimica");
		if(isset($_POST['TecInf']) && $_POST['TecInf'] == "on")
			array_push($cursos,"tecnicoeminformatica");
		if(isset($_POST['TecQuim']) && $_POST['TecQuim'] == "on")
			array_push($cursos,"tecnicoemquimica");
		if(isset($_POST['TecElet']) && $_POST['TecElet'] == "on")
			array_push($cursos,"tecnicoemeletrotecnica");
		
		$_SESSION['erros'] = 0;
		$_SESSION['mensagensErro'] = array();///Vetor que indica a presença de erros;
		
		if($_SESSION['erros'] != 0) {
			redirect(base_url() . '/estajui/coordenador-extensao/usuarios.php');
		}
		
		$lecionaModel = $loader->loadModel('LecionaModel', 'LecionaModel');
		$ofereceCursoModel = $loader->loadModel('OfereceCursoModel', 'OfereceCursoModel');
		
		if($funcionarioModel->updatePermissoes($funcionario) == 2) {
			
			$_SESSION['mensagensErro'][$_SESSION['erros']] = "Problema atualizar informações!";
			$_SESSION['erros']++;
		}
		
		if ($lecionaModel->deletePorFuncionario($funcionario) != 0) { ///Apagando registros de disciplinas ministradas
			$_SESSION['mensagensErro'][$_SESSION['erros']] = "Problema atualizar informações!";
			$_SESSION['erros']++;
		}
		
		foreach($cursos as $curso) {
			if(strcmp($curso,"engenhariaquimica") == 0) {
				$oferta = $ofereceCursoModel->read(2, 1)[0];
				$leciona = new Leciona($funcionario, $oferta);
				if ($lecionaModel->create($leciona) == 2) {
					$_SESSION['mensagensErro'][$_SESSION['erros']] = "Problema atualizar informações!";
					$_SESSION['erros']++;
				}
			}
			
			if(strcmp($curso,"cienciadacomputacao") == 0) {
				$oferta = $ofereceCursoModel->read(1, 1)[0];
				$leciona = new Leciona($funcionario, $oferta);
				if ($lecionaModel->create($leciona) == 2) {
					$_SESSION['mensagensErro'][$_SESSION['erros']] = "Problema atualizar informações!";
					$_SESSION['erros']++;
				}
			}
			
			if(strcmp($curso,"tecnicoeminformatica") == 0) {
				$oferta = $ofereceCursoModel->read(3, 1)[0];
				$leciona = new Leciona($funcionario, $oferta);
				if ($lecionaModel->create($leciona) == 2) {
					$_SESSION['mensagensErro'][$_SESSION['erros']] = "Problema atualizar informações!";
					$_SESSION['erros']++;
				}
			}
			
			if(strcmp($curso,"tecnicoemquimica") == 0) {
				$oferta = $ofereceCursoModel->read(4, 1)[0];
				$leciona = new Leciona($funcionario, $oferta);
				if ($lecionaModel->create($leciona) == 2) {
					$_SESSION['mensagensErro'][$_SESSION['erros']] = "Problema atualizar informações!";
					$_SESSION['erros']++;
				}
			}
			
			if(strcmp($curso,"tecnicoemeletrotecnica") == 0) {
				$oferta = $ofereceCursoModel->read(5, 1)[0];
				$leciona = new Leciona($funcionario, $oferta);
				if ($lecionaModel->create($leciona) == 2) {
					$_SESSION['mensagensErro'][$_SESSION['erros']] = "Problema atualizar informações!";
					$_SESSION['erros']++;
				}
			}
			
		}
	}
	
	$_SESSION['funcionarios'] = null;
	$_SESSION['leciona'] = null;
	redirect(base_url() . '/estajui/coordenador-extensao/usuarios.php');
}
}