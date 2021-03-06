<?php
require_once(dirname(__FILE__) . '/../util/PHPMailer/PHPMailerAutoload.php');

class Email{
    private $mail;
    private $codigo;
    private $remetente;
    private $remetenteNome;

    public function __construct() {
        $this->mail = new PHPMailer(true);
        $this->mail->isSMTP();                                      // Set mailer to use SMTP
        $this->mail->Host = 'ssl://smtp.gmail.com';  // Specify main and backup SMTP servers
        $this->mail->SMTPAuth = true;                               // Enable SMTP authentication
        $this->mail->Username = 'cabronzputo@gmail.com';                 // SMTP username
        $this->mail->Password = 'secret-123';                           // SMTP password
        $this->mail->SMTPSecure = 'SSL';                            // Enable TLS encryption, `ssl` also accepted
        $this->mail->Port = 465;

    }
    public function criarEmailAluno($remetente, $remetenteNome, $destinatario, $destinatarioNome){
        $base_url = 'http://localhost/estajui';    
        $this->geraCodigoConfirmacao();
        $this->mail->setFrom($remetente, $remetenteNome);
        $this->mail->addAddress($destinatario, $destinatarioNome);
        $this->mail->isHTML(true);                                  // Set email format to HTML
        $this->mail->Subject = 'Confirmação de conta ESTAJUI';
        $this->mail->Body  = "Link de ativação da sua conta no <a href=\"http://www.estajui.com.br\">Estajui</a>, Clique no link ativar: <a href=\"$base_url/scripts/controllers/verification.php?code=$this->codigo&email=$destinatario\">Link</a>.";
    }
    public static function criarEmailRecuperarSenha($remetente, $remetenteNome, $destinatario, $destinatarioNome){
        $base_url = 'http://localhost/estajui';

        $email = new Email();
        $email->geraCodigoConfirmacao();

        //$email->mail->SMTPDebug = SMTP::DEBUG_SERVER;
        $email->mail->setFrom($remetente, $remetenteNome);
        $email->mail->addAddress($destinatario, $destinatarioNome);
        $email->mail->isHTML(true);                                  // Set email format to HTML
        $email->mail->Subject = 'Recuperação de senha ESTAJUI';
        $email->mail->Body  = "Foi solicitado um link para recuperação de senha para sua conta no <a href=\"http://www.estajui.com.br\">Estajui</a>, Clique no link para acessar a página de redefinição: <a href=\"$base_url/estajui/recuperar_senha.php?c=$email->codigo\"></a>.<br>Caso você não tenha solicitado, ignore este email e considere alterar sua senha.";       
        return $email;
    }


    public function enviarEmail(){
        if($this->mail->send()){
            return true;
        }
        return false;
    }
    public function getcodigo(){
        return $this->codigo;

    }
    public function setcodigo($codigo){
         $this->codigo = $codigo;

    }
    public function geraCodigoConfirmacao(){
        $this->codigo = substr(md5(mt_rand()),0,20);
        return $this->codigo;
    }
}
