<?php

require_once('MainModel.php');

class EmailModel extends MainModel{
    public function emitirCodigoConfirmacao($aluno,$email){
        try {
            $this->conn->beginTransaction();
            $pstmt = $this->conn->prepare("INSERT INTO verificar (email, codigo, verificado) VALUES(?,?, ?)");
            $pstmt->execute(array($aluno->getlogin(),$email->getcodigo(),0));// 0 == não verificado
            $this->conn->commit();
             return true;
        } catch (PDOExecption $e) {
            $this->conn->rollback();
            return false;
        }
    }

    public function validarCodigoConfirmacao($code){

        try{
            $pstmt = $this->conn->prepare("SELECT id from verificar WHERE codigo LIKE :codigo");
            $pstmt->bindParam(':codigo', $code);
            $pstmt->execute(); 
            if($pstmt->fetch() == null) return false;
            $pstmt = $this->conn->prepare("SELECT id from verificar WHERE codigo LIKE :codigo AND verificado LIKE :verificado");
            $verificado = 1;
            $pstmt->bindParam(':codigo', $code);
            $pstmt->bindParam(':verificado',$verificado);
            $pstmt->execute();
            if($pstmt->fetch()!=null) return false;
       
        } catch (PDOExecption $e){
            return false;
        }

        try {
            $this->conn->beginTransaction();
            $pstmt = $this->conn->prepare("UPDATE verificar SET verificado  = ? WHERE codigo = ? AND verificado = ?");
            $pstmt->execute(array(1,$code,0));// 0 == não verificado
             $this->conn->commit();
             return true;
        } catch (PDOExecption $e) {
            $this->conn->rollback();
            return false;
        }
    }
}
