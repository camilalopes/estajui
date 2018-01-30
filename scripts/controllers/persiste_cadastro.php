<?php

require_once(dirname(__FILE__) . '/../base-controller.php');

if (isset($_POST['cadastrar'])) {
    //carregar arquivo da pasta util e model para cadastrar o aluno
    $loader->loadUtil('String');
    $loader->loadDao('Aluno');

    session_start();
    //talvez seja uma boa inicializar o aluno pelo post(não no construtor, mas em um método init():bool)
    $aluno = new Aluno(null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null, null);

    $aluno->_cpf=filter_var($_POST['cpf'], FILTER_SANITIZE_NUMBER_INT);
    $aluno->_nome=LimpaString::limpar($_POST['nome']);
    $aluno->_data_nasc = date('Y-m-d', strtotime(str_replace('-', '/', $_POST['data_nasc'])));
    $aluno->_rg_num=LimpaString::limpar($_POST['rg']);
    $aluno->_rg_orgao=LimpaString::limpar($_POST['orgao_exp']);
    $aluno->_estado_civil=LimpaString::limpar($_POST['estado_civil']);
    $aluno->_sexo=LimpaString::limpar($_POST['sexo']);
    $aluno->_telefone=filter_var($_POST['telefone'], FILTER_SANITIZE_NUMBER_INT);
    $aluno->_celular=filter_var($_POST['celular'], FILTER_SANITIZE_NUMBER_INT);
    $aluno->_nome_pai=LimpaString::limpar($_POST['nome_pai']);
    $aluno->_nome_mae=LimpaString::limpar($_POST['nome_mae']);
    $aluno->_cidade_natal=LimpaString::limpar($_POST['cidade_natal']);
    $aluno->_estado_natal=LimpaString::limpar($_POST['estado_natal']);

    $aluno->_logradouro=LimpaString::limpar($_POST['logradouro']);
    $aluno->_bairro=LimpaString::limpar($_POST['bairro']);
    $aluno->_numero=LimpaString::limpar($_POST['numero']);
    $aluno->_complemento=LimpaString::limpar($_POST['complemento']);
    $aluno->_cidade=LimpaString::limpar($_POST['cidade']);
    $aluno->_uf=LimpaString::limpar($_POST['uf']);
    $aluno->_cep=filter_var($_POST['cep'], FILTER_SANITIZE_NUMBER_INT);

    $aluno->_login = LimpaString::limpar($_POST['email']);
    $aluno->_login_confirmacao= LimpaString::limpar($_POST['email_confirmacao']);
    $aluno->_senha= $_POST['senha'];
    $aluno->_senha_confirmacao= $_POST['senha_confirmacao'];
    $aluno->_tipo = 1;

    $erros = 0;
    $notificao_erros = array();
    if (!filter_var($aluno->_login, FILTER_VALIDATE_EMAIL)) {
        $_SESSION['email_erro1'] = true;
        unset($_SESSION['email']);
        unset($_SESSION['email_confirmacao']);
        $erros++;
    } else {
        if (strcmp($aluno->_login, $aluno->_login_confirmacao)!=0) {
            $_SESSION['email_erro2'] = "Os emails informados não são iguais.";
            unset($_SESSION['email']);
            unset($_SESSION['email_confirmacao']);
            $erros++;
        }
    }

    if (strcmp($aluno->_senha, $aluno->_senha_confirmacao)!=0) {
        $_SESSION['senha_erro1'] = "As senhas não iguais.";
        unset($_SESSION['senha']);
        unset($_SESSION['senha_confirmacao']);
        $erros++;
    } else {
        if (strlen($aluno->_senha)<8) {
            $_SESSION['senha_erro2'] = true;
            unset($_SESSION['senha']);
            unset($_SESSION['senha_confirmacao']);

            $erros++;
        }
    }

    $model = $loader->loadModel('aluno-model', 'AlunoModel');
    if($model != null){
        if($model->cadastrar($aluno)){
            redirect(base_url() . '/estajui/login/login.html');
        }else{
            echo "ERROR MESSAGE!!!";
        }
    }else{
        echo "ERROR MESSAGE!!!";
    }
}
//header("Location: cadastro.php");
redirect(base_url() . '/estajui/login/cadastro.php');